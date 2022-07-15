<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\topLevelDomainListInterface;

interface topLevelDomainListCacheInterface
{
    public function fetch(string $uri): ?topLevelDomainListInterface;

    public function remember(string $uri, topLevelDomainListInterface $topLevelDomainList): bool;

    public function forget(string $uri): bool;
}