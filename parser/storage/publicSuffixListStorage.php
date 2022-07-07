<?php declare(strict_types=1);

namespace Pdp\Storage;
interface publicSuffixListStorage extends publicSuffixListClient
{
    public function delete(string $uri): bool;
}