<?php namespace yxorP\app\lib\parser;
interface resolvedDomainNameInterface extends hostInterface, domainNameProviderInterface
{
    public function suffix(): topLevelDomainInterface;

    public function secondLevelDomain(): nameInterface;

    public function registrableDomain(): nameInterface;

    public function subDomain(): nameInterface;

    public function withSubDomain(nameInterface $subDomain): self;

    public function withSecondLevelDomain(nameInterface $label): self;

    public function withSuffix(topLevelDomainInterface $suffix): self;
}