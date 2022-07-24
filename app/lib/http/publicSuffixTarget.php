<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixTarget
{

    public function registrableDomain(): registrableDomain
    {
        return new registrableDomain(yP::store(ENV_DEFAULT_TARGET));
    }

}

