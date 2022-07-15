<?php

namespace yxorP\inc\parser;
interface domainNameResolverInterface
{
    public function resolve(hostInterface $host): mixed;
}