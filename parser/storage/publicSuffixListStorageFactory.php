<?php declare(strict_types=1);

namespace Pdp\Storage;

interface publicSuffixListStorageFactory
{
    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorage;
}