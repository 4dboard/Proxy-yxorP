<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain(): registrableDomain
    {
        return new(yP::store(ENV_DEFAULT_HOST));
    }

}

