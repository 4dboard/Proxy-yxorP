<?php namespace yxorP\app\lib\proxy\exception;

use Throwable;


echo 2;
if (interface_exists(Throwable::class)) {
    interface proxyException extends Throwable
    {
    }
} else {
    interface proxyException
    {
    }
}


echo 3;
