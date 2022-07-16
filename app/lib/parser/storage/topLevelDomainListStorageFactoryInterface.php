<?php

namespace yxorP\app\lib\parser\storage;

interface topLevelDomainListStorageFactoryInterface
{
    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorageInterface;
}