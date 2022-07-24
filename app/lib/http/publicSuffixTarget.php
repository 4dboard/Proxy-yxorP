<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixTarget
{

    public function registrableDomain(): string
    {
        return yP::store(ENV_DEFAULT_HOST);
    }

}
