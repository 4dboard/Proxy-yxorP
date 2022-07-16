<?php

namespace yxorP\app\lib\parser\storage;

interface publicSuffixListStorageFactoryInterface
{
    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorageInterface;
}