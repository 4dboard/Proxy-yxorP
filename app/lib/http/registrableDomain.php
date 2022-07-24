<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class registrableDomain
{
    public string $domain = '';

    public function __construct()
    {
        $this->domain = new(yP::store(ENV_DEFAULT_TARGET));
    }

    public function registrableDomain(): toString
    {
        return yP::store(ENV_DEFAULT_HOST);
    }

}