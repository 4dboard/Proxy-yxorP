<?php namespace yxorP\guzzle\Exception;

use Throwable;

if (interface_exists(Throwable::class)) {
    interface GuzzleException extends Throwable
    {
    }
} else {
    interface GuzzleException
    {
    }
}