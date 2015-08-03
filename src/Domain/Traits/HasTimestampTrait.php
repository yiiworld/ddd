<?php

namespace Vova07\DDD\Domain\Traits;

use DateTime;

trait HasTimestampTrait
{
    /**
     * @var DateTime
     */
    protected $createdTime;

    /**
     * @var DateTime
     */
    protected $updatedTime;

    /**
     * Sets createdTime.
     *
     * @param DateTime $createdTime
     *
     * @return $this
     */
    public function setCreatedTime(DateTime $createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Returns createdTime.
     *
     * @return DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Sets updatedTime.
     *
     * @param DateTime $updatedTime
     *
     * @return $this
     */
    public function setUpdatedTime(DateTime $updatedTime)
    {
        $this->updatedTime = $updatedTime;

        return $this;
    }

    /**
     * Returns updatedTime.
     *
     * @return DateTime
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }
}
