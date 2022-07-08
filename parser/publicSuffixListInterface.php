<?php

namespace yxorP\parser;
interface publicSuffixListInterface extends domainNameResolverInterface
{
    public function getCookieDomain(aHostInterface $host): resolvedInterfaceDomainNameInterface;

    public function getICANNDomain(aHostInterface $host): resolvedInterfaceDomainNameInterface;

    public function getPrivateDomain(aHostInterface $host): resolvedInterfaceDomainNameInterface;
}