<?php

namespace yxorP\app\lib\twoFactor\Providers\Time;

interface ITimeProviderInterface
{
    /**
     * @return int the current timestamp according to this provider
     */
    public function getTime();
}
