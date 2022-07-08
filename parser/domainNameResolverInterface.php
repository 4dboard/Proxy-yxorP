<?php

namespace yxorP\parser;
interface domainNameResolverInterface
{
    public function resolve(bHostInterface $host): resolvedInterfaceDomainNameInterface;
}