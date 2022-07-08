<?php namespace Bugsnag\DateTime;

use DateTimeImmutable;

final class Clock implements ClockInterface
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}