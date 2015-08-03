<?php

namespace Vova07\DDD\Domain\Traits;

trait SerializableTrait
{
    /**
     * Object serializing.
     *
     * @return string
     */
    public function serialize()
    {
        return serialize($this);
    }

    /**
     * @param $serialized
     *
     * @return mixed
     */
    public function unserialize($serialized)
    {
        return unserialize($serialized);
    }
}
