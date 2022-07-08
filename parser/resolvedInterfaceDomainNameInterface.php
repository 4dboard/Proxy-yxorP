<?php declare(strict_types=1);

namespace yxorP\parser;
interface resolvedDomainName extends host, domainNameProvider
{
    public function suffix(): effectiveTopLevelDomain;

    public function secondLevelDomain(): domainName;

    public function registrableDomain(): domainName;

    public function subDomain(): domainName;

    public function withSubDomain(domainName $subDomain): self;

    public function withSecondLevelDomain(domainName $label): self;

    public function withSuffix(effectiveTopLevelDomain $suffix): self;
}