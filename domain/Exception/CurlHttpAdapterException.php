<?php


namespace yxorp\domain\Exception;


require Constants::get(ROOT_DIR) . "domain/exception/pdpException.php";
require Constants::get(ROOT_DIR) . "domain/httpAdapter/httpAdapterInterface.php";

class curlHttpAdapterException extends httpAdapterException
{
}