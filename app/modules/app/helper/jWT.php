<?php

namespace App\Helper;

use helper;
use yxorP\app\lib\data\firebase\jWT as JWTLIB;
use yxorP\app\lib\data\firebase\key;
use const yxorP\app\lib\http\helper;

class jWT extends

    helper
{


    /**
     * alias for create
     **/
    public
    function encode(array $payload, ?string $key = null)
    {
        return $this->create($payload, $key);
    }

    public
    function create(array $payload, ?string $key = null)
    {
        return JWTLIB::encode($payload, $key ?? $this->app->retrieve('sec-key'), 'HS256');
    }

    public
    function decode(string $token, ?string $key = null)
    {
        return JWTLIB::decode($token, new key($key ?? $this->app->retrieve('sec-key'), 'HS256'));
    }
}
