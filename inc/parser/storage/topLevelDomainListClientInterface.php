<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\topInterfaceLevelDomainListInterface;

interface topLevelDomainListClientInterface
{
    public function get(string $uri): topInterfaceLevelDomainListInterface;
}