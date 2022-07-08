<?php

namespace yxorP\parser\Storage;

use DateInterval;
use DateTimeImmutable;
use DateTimeInterface;
use Exception;
use InvalidArgumentException;
use TypeError;
use function filter_var;
use function is_object;
use function method_exists;
use const FILTER_VALIDATE_INT;

final class timeToLive
{
    public static function fromDateTimeInterface(DateTimeInterface $date): DateInterval
    {
        return self::until($date);
    }

    /**
     * @throws Exception
     */
    public static function until(DateTimeInterface $date): DateInterval
    {
        return (new DateTimeImmutable('NOW', $date->getTimezone()))->diff($date, false);
    }

    public static function fromScalar($duration): DateInterval
    {
        if (is_object($duration) && method_exists($duration, '__toString')) {
            $duration = (string)$duration;
        }
        if (!is_scalar($duration)) {
            throw new TypeError('The duration type is unsupported or is an non stringable object.');
        }
        return self::fromDurationString((string)$duration);
    }

    public static function fromDurationString(string $duration): DateInterval
    {
        $interval = @DateInterval::createFromDateString($duration);
        if (!$interval instanceof DateInterval) {
            throw new InvalidArgumentException('The ttl value "' . $duration . '" can not be parsable by `DateInterval::createFromDateString`.');
        }
        return $interval;
    }

    public static function convert($ttl): ?DateInterval
    {
        if ($ttl instanceof DateInterval || null === $ttl) {
            return $ttl;
        }
        if ($ttl instanceof DateTimeInterface) {
            return self::until($ttl);
        }
        if (is_object($ttl) && method_exists($ttl, '__toString')) {
            $ttl = (string)$ttl;
        }
        if (false !== ($seconds = filter_var($ttl, FILTER_VALIDATE_INT))) {
            return self::fromDurationString($seconds . ' seconds');
        }
        if (!is_string($ttl)) {
            throw new TypeError('The duration type is unsupported or is an non stringable object.');
        }
        return self::fromDurationString($ttl);
    }
}