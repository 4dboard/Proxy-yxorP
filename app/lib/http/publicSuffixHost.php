<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain(): object
    {
        return (object)yP::store(ENV_DEFAULT_HOST);
    }

}
