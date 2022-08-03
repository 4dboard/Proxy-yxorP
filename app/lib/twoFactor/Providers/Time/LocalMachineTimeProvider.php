<?php

namespace yxorP\app\lib\twoFactor\Providers\Time;

class LocalMachineTimeProvider implements ITimeProviderInterface
{
    public function getTime(): int
    {
        return time();
    }
}
