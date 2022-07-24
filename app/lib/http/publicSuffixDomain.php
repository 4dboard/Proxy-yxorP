<?php namespace yxorP\app\lib\http;

use yxorP\app\yP;

class publicSuffixDomain
{
    private ?string $domain = null;

    public function __construct()
    {
        $this->domain = new(yP::store(ENV_DEFAULT_TARGET));
    }

    public function toString()
    {
        return $this->domain;
    }

}