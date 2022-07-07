<?php declare(strict_types=1);

namespace Pdp;
interface domainNameResolver
{
    public function resolve(host $host): resolvedDomainName;
}