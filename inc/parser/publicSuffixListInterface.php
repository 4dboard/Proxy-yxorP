<?php

namespace yxorP\inc\parser;
interface publicSuffixListInterface extends domainNameResolverInterface
{
    public function getCookieDomain(hostInterface $host): resolvedDomainNameInterface;

    public function getICANNDomain(hostInterface $host): resolvedDomainNameInterface;

    public function getPrivateDomain(hostInterface $host): resolvedDomainNameInterface;
}