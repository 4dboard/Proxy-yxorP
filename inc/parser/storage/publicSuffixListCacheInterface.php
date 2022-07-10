<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\publicSuffixListInterface;

interface publicSuffixListCacheInterface
{
    public function fetch(string $uri): ?publicSuffixListInterface;

    public function remember(string $uri, publicSuffixListInterface $publicSuffixList): bool;

    public function forget(string $uri): bool;
}