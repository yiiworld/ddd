<?php

namespace Vova07\DDD\Domain\Contracts;

use DateTime;

interface HasTimestamp
{
    /**
     * Sets updatedTime DateTime.
     *
     * @param DateTime $updatedTime
     *
     * @return static
     */
    public function setUpdatedTime(DateTime $updatedTime);

    /**
     * @return DateTime
     */
    public function getUpdatedTime();

    /**
     * Sets createdTime DateTime.
     *
     * @param DateTime $createdTime
     *
     * @return static
     */
    public function setCreatedTime(DateTime $createdTime);

    /**
     * @return static
     */
    public function getCreatedTime();
}
