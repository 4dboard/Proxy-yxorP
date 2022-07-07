<?php declare(strict_types=1);

namespace Pdp\Storage;

interface topLevelDomainListStorageFactory
{
    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorage;
}