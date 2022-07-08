<?php

namespace yxorP\parser;
interface resolvedInterfaceDomainNameInterface extends bHostInterface, domainNameProviderInterface
{
    public function suffix(): effectiveTopLevelDomainInterface;

    public function secondLevelDomain(): aaDomainNameInterface;

    public function registrableDomain(): aaDomainNameInterface;

    public function subDomain(): aaDomainNameInterface;

    public function withSubDomain(aaDomainNameInterface $subDomain): self;

    public function withSecondLevelDomain(aaDomainNameInterface $label): self;

    public function withSuffix(effectiveTopLevelDomainInterface $suffix): self;
}