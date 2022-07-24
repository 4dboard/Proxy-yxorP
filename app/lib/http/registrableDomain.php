<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain() : registrableDomain
    {
        return yP::store(ENV_DEFAULT_HOST);
    }

}

class registrableDomain
{

    public function registrableDomain() : toString
    {
        return yP::store(ENV_DEFAULT_HOST);
    }

}
