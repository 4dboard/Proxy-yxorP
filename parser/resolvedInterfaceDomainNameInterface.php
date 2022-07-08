<?php

namespace yxorP\parser;
interface resolvedInterfaceDomainNameInterface extends aHostInterface, domainNameProviderInterface
{
    public function suffix(): effectiveTopLevelDomainInterface;

    public function secondLevelDomain(): domainNameInterface;

    public function registrableDomain(): domainNameInterface;

    public function subDomain(): domainNameInterface;

    public function withSubDomain(domainNameInterface $subDomain): self;

    public function withSecondLevelDomain(domainNameInterface $label): self;

    public function withSuffix(effectiveTopLevelDomainInterface $suffix): self;
}