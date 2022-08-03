<?php

namespace yxorP\app\modules\app\helper;

use helper;
use yxorP\app\lib\data\firebase\jWT as JWTLIB;
use yxorP\app\lib\data\firebase\key;
use yxorP\app\lib\http\helperAware;


/**
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class jWT extends helperAware
{


    /**
     * alias for create
     **/
    public function encode(array $payload, ?string $key = null): string
    {
        return $this->create($payload, $key);
    }

    public function create(array $payload, ?string $key = null): string
    {
        return JWTLIB::encode($payload, $key ?? $this->app->retrieve('sec-key'), 'HS256');
    }

    public function decode(string $token, ?string $key = null): \stdClass
    {
        return JWTLIB::decode($token, new key($key ?? $this->app->retrieve('sec-key'), 'HS256'));
    }
}
