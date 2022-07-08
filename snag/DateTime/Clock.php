<?php namespace yxorP\snag\DateTime;

use DateTimeImmutable;

final class Clock implements ClockInterface
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}