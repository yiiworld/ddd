<?php

namespace Vova07\DDD\Domain\Contracts;

interface Bannable
{
    /**
     * @return bool
     */
    public function isBanned();

    /**
     * @return $this
     */
    public function banned();

    /**
     * @return $this
     */
    public function unbanned();
}
