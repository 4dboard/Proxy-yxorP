<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

use yxorP\parser\topLevelDomainList;

interface topLevelDomainListCache
{
    public function fetch(string $uri): ?topLevelDomainList;

    public function remember(string $uri, topLevelDomainList $topLevelDomainList): bool;

    public function forget(string $uri): bool;
}