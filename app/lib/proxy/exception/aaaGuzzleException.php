<?php namespace yxorP\app\lib\proxy\exception;

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
echo 1;
