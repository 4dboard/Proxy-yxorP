<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class registrableDomain
{
    private registrableDomain;

    public function __construct()
    {
        $this->registrableDomain = new(yP::store(ENV_DEFAULT_TARGET));
    }

    public function registrableDomain(): toString
    {
        return yP::store(ENV_DEFAULT_HOST);
    }

}