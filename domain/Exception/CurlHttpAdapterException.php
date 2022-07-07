<?php


namespace yxorp\domain\Exception;


require constants::get(ROOT_DIR) . "domain/exception/pdpException.php";
require constants::get(ROOT_DIR) . "domain/httpAdapter/httpAdapterInterface.php";

class curlHttpAdapterException extends httpAdapterException
{
}