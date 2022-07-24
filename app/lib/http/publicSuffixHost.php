<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain(): registrable
    {
        return new registrable(yP::store(ENV_DEFAULT_HOST));
    }

}

