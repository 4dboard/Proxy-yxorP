<?php

namespace yxorP\parser\Storage;

use yxorP\parser\topInterfaceLevelDomainListInterface;

interface topLevelDomainListClientInterface
{
    public function get(string $uri): topInterfaceLevelDomainListInterface;
}