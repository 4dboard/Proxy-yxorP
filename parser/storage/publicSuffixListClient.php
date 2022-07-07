<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\publicSuffixList;

interface publicSuffixListClient
{
    public function get(string $uri): publicSuffixList;
}