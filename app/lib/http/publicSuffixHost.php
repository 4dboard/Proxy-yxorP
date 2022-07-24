<?php namespace yxorP\app\lib\http;

use yxorP\app\lib\parser\nameInterface;
use yxorP\app\lib\parser\resolvedDomainNameInterface;
use yxorP\app\lib\parser\topLevelDomainInterface;

class publicSuffixHost implements resolvedDomainNameInterface
{
    public function suffix(): topLevelDomainInterface
    {
        return new topLevelDomain('com');
    }

    public function secondLevelDomain(): nameInterface
    {
        return new name('example');
    }

    public function registrableDomain(): nameInterface
    {
        return new name('example');
    }

    public function subDomain(): nameInterface
    {
        return new name('example');
    }

    public function withSubDomain(nameInterface $subDomain)
    {
        return new publicSuffixHost($subDomain->toString());
    }

    public function withSecondLevelDomain(nameInterface $label): self
    {
        return new publicSuffixHost($label->toString());
    }

    public function withSuffix(topLevelDomainInterface $suffix): self
    {
        return new publicSuffixHost($suffix->toString());
    }
}
