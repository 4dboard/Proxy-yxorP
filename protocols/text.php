<?php namespace yxorP\protocols;

use yxorP\connection\connectionInterface;
use function rtrim;
use function strlen;
use function strpos;

class text
{
    public static function input($buffer, connectionInterface $connection): int
    {
        if (isset($connection->maxPackageSize) && strlen($buffer) >= $connection->maxPackageSize) {
            $connection->close();
            return 0;
        }
        $pos = strpos($buffer, "\n");
        if ($pos === false) {
            return 0;
        }
        return $pos + 1;
    }

    public static function encode($buffer): string
    {
        return $buffer . "\n";
    }

    public static function decode($buffer): string
    {
        return rtrim($buffer, "\r\n");
    }
}