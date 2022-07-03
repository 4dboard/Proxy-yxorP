<?php namespace yxorP\protocols;

use yxorP\connection\connectionInterface;

/* A protocol class that implements the `protocolInterface` interface. */

class text
{
    /* Checking if the buffer is larger than the maxPackageSize, if it is, it closes the connection. */
    public static function input($buffer, connectionInterface $connection): int
    {
        if (isset($connection->maxPackageSize) && strlen($buffer) >= $connection->maxPackageSize) {
            $connection->close();
            return 0;
        }
        $pos = strpos($buffer, "\n");
        if ($pos === false) return 0;
        return $pos + 1;
    }

    /* Adding a newline to the end of the buffer. */
    public static function encode($buffer): string
    {
        return $buffer . "\n";
    }

    /* It removes the newline from the end of the buffer. */
    public static function decode($buffer): string
    {
        return rtrim($buffer, "\r\n");
    }
}