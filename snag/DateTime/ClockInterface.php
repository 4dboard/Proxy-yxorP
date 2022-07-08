<?php

namespace yxorP\snag\DateTime;

use DateTimeImmutable;

interface ClockInterface
{
    /**
     * @return DateTimeImmutable
     */
    public function now();
}
