<?php

namespace yxorP\inc\parser\storage;

interface publicSuffixListStorageFactoryInterface
{
    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorageInterface;
}