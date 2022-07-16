<?php

namespace yxorP\app\lib\parser\storage;

use yxorP\app\lib\parser\publicSuffixListInterface;

interface publicSuffixListCacheInterface
{
    public function fetch(string $uri): ?publicSuffixListInterface;

    public function remember(string $uri, publicSuffixListInterface $publicSuffixList): bool;

    public function forget(string $uri): bool;
}