<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain(): publicSuffixDomain
    {
        return new publicSuffixDomain(store::store(ENV_DEFAULT_HOST));
    }

}

