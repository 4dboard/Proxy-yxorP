<?php namespace yxorP\proxy\Exception;

use Throwable;

if (interface_exists(Throwable::class)) {
    interface ProxyException extends Throwable
    {
    }
} else {
    interface ProxyException
    {
    }
}