<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

use yxorP\parser\publicSuffixList;

interface publicSuffixListCache
{
    public function fetch(string $uri): ?publicSuffixList;

    public function remember(string $uri, publicSuffixList $publicSuffixList): bool;

    public function forget(string $uri): bool;
}