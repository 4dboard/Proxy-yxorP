<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\publicSuffixList;

interface publicSuffixListCache
{
    public function fetch(string $uri): ?publicSuffixList;

    public function remember(string $uri, publicSuffixList $publicSuffixList): bool;

    public function forget(string $uri): bool;
}