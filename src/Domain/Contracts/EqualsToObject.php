<?php

namespace Vova07\DDD\Domain\Contracts;

use Vova07\DDD\Domain\ValueObjects\Object;

interface EqualsToObject
{
    /**
     * Checks whether objects are equal.
     *
     * @param \Vova07\DDD\Domain\ValueObjects\Object $object
     *
     * @return bool
     */
    public function isEqualTo(Object $object);
}
