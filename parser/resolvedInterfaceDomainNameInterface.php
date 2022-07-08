<?php

namespace yxorP\parser;
interface resolvedInterfaceDomainNameInterface extends aHostInterface, domainNameProviderInterface
{
    public function suffix(): effectiveTopLevelDomainInterface;

    public function secondLevelDomain(): aDomainNameInterface;

    public function registrableDomain(): aDomainNameInterface;

    public function subDomain(): aDomainNameInterface;

    public function withSubDomain(aDomainNameInterface $subDomain): self;

    public function withSecondLevelDomain(aDomainNameInterface $label): self;

    public function withSuffix(effectiveTopLevelDomainInterface $suffix): self;
}