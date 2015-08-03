<?php

namespace Vova07\DDD\Domain\ValueObjects;

use Serializable;
use Vova07\DDD\Domain\Traits\SerializableTrait;

abstract class Object implements Serializable
{
    use SerializableTrait;

    /**
     * Checks whether $object is of same class type.
     *
     * @param self $object
     *
     * @return bool
     */
    final protected function isOfValidType(Object $object)
    {
        return get_called_class() === get_class($object);
    }
}

