<?php namespace yxorP\protocols;

use yxorP\connection\connectionInterface;

/* Defining the methods that must be implemented by any protocol. */

interface protocolInterface
{
    /* The method that will be called when a new message is received. */
    public static function input($recv_buffer, connectionInterface $connection);

    /* Decoding the data received from the client. */
    public static function decode($recv_buffer, connectionInterface $connection);

    public static function encode($data, connectionInterface $connection);
}