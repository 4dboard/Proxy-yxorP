<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

use yxorP\parser\topLevelDomainList;

interface topLevelDomainListClient
{
    public function get(string $uri): topLevelDomainList;
}