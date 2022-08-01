<?php namespace yxorP\app\lib\proxy\exception;

use Throwable;


echo 1;
if (interface_exists(Throwable::class)) {
    interface ProxyException extends Throwable
    {
    }
} else {
    interface ProxyException
    {
    }
}
