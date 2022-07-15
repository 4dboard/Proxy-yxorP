<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\topLevelDomainListInterface;

interface topLevelDomainListClientInterface
{
    public function get(string $uri): topLevelDomainListInterface;
}