<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

interface topLevelDomainListStorageFactory
{
    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorage;
}