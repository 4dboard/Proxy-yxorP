<?php

namespace yxorP\parser;
interface domainNameResolverInterface
{
    public function resolve(aHostInterface $host): resolvedInterfaceDomainNameInterface;
}