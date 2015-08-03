<?php

namespace Vova07\DDD\Domain\Entities;

use Vova07\DDD\Domain\ValueObjects\Object;
use Vova07\DDD\Domain\ValueObjects\ObjectId;

abstract class Entity extends Object
{
    /**
     * @var ObjectId
     */
    protected $id;

    /**
     * @return ObjectId
     */
    public function id()
    {
        return $this->id;
    }
}
