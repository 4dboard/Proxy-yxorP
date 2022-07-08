<?php

namespace yxorP\parser\Storage;

use yxorP\parser\topInterfaceLevelDomainListInterface;

interface topLevelDomainListCacheInterface
{
    public function fetch(string $uri): ?topInterfaceLevelDomainListInterface;

    public function remember(string $uri, topInterfaceLevelDomainListInterface $topLevelDomainList): bool;

    public function forget(string $uri): bool;
}