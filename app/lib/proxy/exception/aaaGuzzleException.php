<?php namespace yxorP\app\lib\proxy\Exception;

use Throwable;

exit('1');
if (interface_exists(Throwable::class)) {
    interface ProxyException extends Throwable
    {
    }
} else {
    interface ProxyException
    {
    }
}
