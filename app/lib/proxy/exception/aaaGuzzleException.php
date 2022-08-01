<?php namespace yxorP\app\lib\proxy\exception;

use Throwable;

if (interface_exists(Throwable::class)) {
    interface proxyException extends Throwable
    {
    }
} else {
    interface proxyException
    {
    }
}
