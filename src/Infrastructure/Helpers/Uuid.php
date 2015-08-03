<?php

namespace Vova07\DDD\Infrastructure\Helpers;

class Uuid
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Generates version 4 (random) UUID.
     *
     * @return string
     */
    public static function uuid4()
    {
        $data = self::generateBytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    /**
     * Generates a 16 bit binary representation of a UUID.
     *
     * @param string $uuid
     *
     * @return string
     */
    public static function toBinary($uuid)
    {
        return pack('H*', str_replace('-', '', $uuid));
    }

    /**
     * Generates a UUID from its binary representation.
     *
     * @param $binary
     *
     * @return mixed
     */
    public static function fromBinary($binary)
    {
        $value = unpack('H*', $binary);

        return preg_replace('/([0-9a-f]{8})([0-9a-f]{4})([0-9a-f]{4})([0-9a-f]{4})([0-9a-f]{12})/', '$1-$2-$3-$4-$5', $value[1]);
    }

    /**
     * Generates random bytes for use to create UUIDs.
     *
     * @param int $length
     *
     * @return string
     */
    private static function generateBytes($length)
    {
        if (function_exists('openssl_random_pseudo_bytes')) {
            return openssl_random_pseudo_bytes($length);
        }

        $bytes = '';

        for ($i = 1; $i <= $length; $i++) {
            $bytes = chr(mt_rand(0, 255)).$bytes;
        }

        return $bytes;
    }
}
