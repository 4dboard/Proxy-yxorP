<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\topInterfaceLevelDomainListInterface;

interface topLevelDomainListCacheInterface
{
    public function fetch(string $uri): ?topInterfaceLevelDomainListInterface;

    public function remember(string $uri, topInterfaceLevelDomainListInterface $topLevelDomainList): bool;

    public function forget(string $uri): bool;
}