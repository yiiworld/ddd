<?php

namespace Vova07\DDD\Domain\ValueObjects;

use Vova07\DDD\Domain\Contracts\EqualsToObject;
use Vova07\DDD\Infrastructure\Helpers\Uuid;

class ObjectId extends Object implements EqualsToObject
{
    /**
     * @var string The id value
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string|null $aValue
     */
    public function __construct($aValue = null)
    {
        $this->value = (null !== $aValue) ? $aValue : Uuid::uuid4();
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @return ObjectId with a newly created UUID
     */
    public static function newIdentity()
    {
        return new self();
    }

    /**
     * @inheritdoc
     */
    public function isEqualTo(Object $object)
    {
        /* @var ObjectId $object */
        return $object->value() === $this->value();
    }
}
