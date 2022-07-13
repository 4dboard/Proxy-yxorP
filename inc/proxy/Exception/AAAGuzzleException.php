<?php

namespace yxorP\inc\proxy\Exception;

use Throwable;

if (interface_exists(Throwable::class)) {
    interface proxyException extends Throwable
    {
    }
} else {
    /**
     * @method string getMessage()
     * @method Throwable|null getPrevious()
     * @method mixed getCode()
     * @method string getFile()
     * @method int getLine()
     * @method array getTrace()
     * @method string getTraceAsString()
     */
    interface proxyException
    {
    }
}
