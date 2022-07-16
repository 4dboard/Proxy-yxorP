<?php

namespace yxorP\app\lib\parser;
interface domainNameResolverInterface
{
    public function resolve(hostInterface $host): mixed;
}