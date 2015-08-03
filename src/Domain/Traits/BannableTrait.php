<?php

namespace Vova07\DDD\Domain\Traits;

use DateTime;

trait BannableTrait
{
    /**
     * @var DateTime
     */
    protected $bannedTime;

    /**
     * @return $this
     */
    public function banned()
    {
        $this->bannedTime = new DateTime();

        return $this;
    }

    /**
     * @return $this
     */
    public function unbanned()
    {
        $this->bannedTime = null;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function bannedTime()
    {
        return $this->bannedTime;
    }

    /**
     * @return bool
     */
    public function isBanned()
    {
        return null !== $this->bannedTime;
    }
}
