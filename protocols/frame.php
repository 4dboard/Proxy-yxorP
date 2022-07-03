<?php namespace yxorP\protocols;

use yxorP\connection\tcpConnection;
use function pack;
use function strlen;
use function substr;
use function unpack;

/* A protocol class. */

class frame
{
    /* Checking if the buffer is less than 4 bytes. If it is, it returns 0. */
    public static function input($buffer, tcpConnection $connection)
    {
        if (strlen($buffer) < 4) return 0;
        $unpack_data = unpack('Ntotal_length', $buffer);
        return $unpack_data['total_length'];
    }

    /* Decoding the buffer. */
    public static function decode($buffer): string
    {
        return substr($buffer, 4);
    }

    /* Encoding the buffer. */
    public static function encode($buffer): string
    {
        $total_length = 4 + strlen($buffer);
        return pack('N', $total_length) . $buffer;
    }
}