<?php

namespace yxorP\app\lib\parser;
interface publicSuffixListInterface extends domainNameResolverInterface
{
    public function getCookieDomain(hostInterface $host): resolvedDomainNameInterface;

    public function getICANNDomain(hostInterface $host): resolvedDomainNameInterface;

    public function getPrivateDomain(hostInterface $host): resolvedDomainNameInterface;
}