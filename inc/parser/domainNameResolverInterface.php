<?php

namespace yxorP\inc\parser;
interface domainNameResolverInterface
{
    public function resolve(aHostInterface $host): resolvedInterfaceDomainNameInterface;
}