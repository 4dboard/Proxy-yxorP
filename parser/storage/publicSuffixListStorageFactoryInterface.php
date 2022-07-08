<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

interface publicSuffixListStorageFactory
{
    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorage;
}