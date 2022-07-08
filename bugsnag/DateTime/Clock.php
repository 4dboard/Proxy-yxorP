<?php namespace yxorP\bugsnag\DateTime;

use DateTimeImmutable;

final class Clock implements ClockInterface
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}