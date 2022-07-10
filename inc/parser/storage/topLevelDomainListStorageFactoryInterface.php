<?php

namespace yxorP\inc\parser\storage;

interface topLevelDomainListStorageFactoryInterface
{
    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorageInterface;
}