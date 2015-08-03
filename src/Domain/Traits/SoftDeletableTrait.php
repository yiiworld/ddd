<?php

namespace Vova07\DDD\Domain\Traits;

use DateTime;

trait SoftDeletableTrait
{
    /**
     * @var DateTime
     */
    protected $deletedTime;

    /**
     * @return $this
     */
    public function deleted()
    {
        $this->deletedTime = new DateTime();

        return $this;
    }

    /**
     * @return DateTime
     */
    public function deletedTime()
    {
        return $this->deletedTime;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deletedTime;
    }
}
