<?php namespace yxorP\protocols;

use yxorP\connection\connectionInterface;

interface protocolInterface
{
    public static function input($recv_buffer, connectionInterface $connection);

    public static function decode($recv_buffer, connectionInterface $connection);

    public static function encode($data, connectionInterface $connection);
}