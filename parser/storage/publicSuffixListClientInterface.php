<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

use yxorP\parser\publicSuffixList;

interface publicSuffixListClient
{
    public function get(string $uri): publicSuffixList;
}