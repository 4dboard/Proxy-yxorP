<?php namespace yxorP\bugsnag\DateTime;

use DateTimeImmutable;

final class Date
{
    public static function now(ClockInterface $clock = null): string
    {
        if ($clock === null) {
            $clock = new Clock();
        }
        $date = $clock->now();
        return self::format($date);
    }

    private static function format(DateTimeImmutable $date): string
    {
        $dateTime = $date->format('Y-m-d\TH:i:s');
        $microseconds = $date->format('u');
        $milliseconds = substr($microseconds, 0, 3);
        $offset = $date->format('P');
        return "{$dateTime}.{$milliseconds}{$offset}";
    }
}