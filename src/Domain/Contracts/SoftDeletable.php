<?php

namespace Vova07\DDD\Domain\Contracts;

interface SoftDeletable
{
    /**
     * @return bool
     */
    public function isDeleted();

    /**
     * @return $this
     */
    public function deleted();
}
