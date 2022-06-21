<?php namespace yxorP\Helper;

class HeaderHelper
{
    public static function helper()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');
        ContextHelper::helper();
    }
}

