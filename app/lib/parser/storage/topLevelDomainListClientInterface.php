<?php

namespace yxorP\app\lib\parser\storage;

use yxorP\app\lib\parser\topLevelDomainListInterface;

interface topLevelDomainListClientInterface
{
    public function get(string $uri): topLevelDomainListInterface;
}