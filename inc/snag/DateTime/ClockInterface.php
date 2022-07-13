<?php

namespace yxorP\inc\snag\DateTime;

use DateTimeImmutable;

interface ClockInterface
{
    /**
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable;
}
