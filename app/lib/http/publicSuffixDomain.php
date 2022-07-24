<?php namespace yxorP\app\lib\http;

class publicSuffixDomain
{
    private ?string $domain = null;

    public function __construct($domain)
    {
        $this->domain = $domain;
    }

    public function toString()
    {
        return $this->domain;
    }

}