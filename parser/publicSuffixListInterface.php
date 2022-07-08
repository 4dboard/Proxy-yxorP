<?php

namespace yxorP\parser;
interface publicSuffixListInterface extends domainNameResolverInterface
{
    public function getCookieDomain(bHostInterface $host): resolvedInterfaceDomainNameInterface;

    public function getICANNDomain(bHostInterface $host): resolvedInterfaceDomainNameInterface;

    public function getPrivateDomain(bHostInterface $host): resolvedInterfaceDomainNameInterface;
}