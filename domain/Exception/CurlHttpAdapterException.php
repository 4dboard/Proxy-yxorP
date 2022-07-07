<?php


namespace yxorp\domain\Exception;


require ROOT_DIR . "domain/exception/pdpException.php";
require ROOT_DIR . "domain/httpAdapter/httpAdapterInterface.php";

class curlHttpAdapterException extends httpAdapterException
{
}