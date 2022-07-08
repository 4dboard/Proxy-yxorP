<?php

namespace yxorP\parser\Storage;

use yxorP\parser\publicSuffixListInterface;

interface publicSuffixListCacheInterface
{
    public function fetch(string $uri): ?publicSuffixListInterface;

    public function remember(string $uri, publicSuffixListInterface $publicSuffixList): bool;

    public function forget(string $uri): bool;
}