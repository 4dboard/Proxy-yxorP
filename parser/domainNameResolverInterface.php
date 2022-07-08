<?php declare(strict_types=1);

namespace yxorP\parser;
interface domainNameResolver
{
    public function resolve(host $host): resolvedDomainName;
}