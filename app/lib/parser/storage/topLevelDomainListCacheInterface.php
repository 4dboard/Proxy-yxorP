<?php

namespace yxorP\app\lib\parser\storage;

use yxorP\app\lib\parser\topLevelDomainListInterface;

interface topLevelDomainListCacheInterface
{
    public function fetch(string $uri): ?topLevelDomainListInterface;

    public function remember(string $uri, topLevelDomainListInterface $topLevelDomainList): bool;

    public function forget(string $uri): bool;
}