<?php

namespace yxorP\parser\Storage;

interface topLevelDomainListStorageFactoryInterface
{
    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorageInterface;
}