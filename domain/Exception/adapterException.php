<?php namespace yxorp\domain\Exception;

require DIR_ROOT . "domain/exception/pdpException.php";
require DIR_ROOT . "domain/httpAdapter/httpAdapterInterface.php";

use Exception;

class adapterException extends Exception
{
}