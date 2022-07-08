<?php

namespace yxorP\parser\Storage;

interface publicSuffixListStorageFactoryInterface
{
    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorageInterface;
}