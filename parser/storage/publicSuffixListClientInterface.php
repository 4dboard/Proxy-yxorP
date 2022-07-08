<?php

namespace yxorP\parser\Storage;

use yxorP\parser\publicSuffixListInterface;

interface publicSuffixListClientInterface
{
    public function get(string $uri): publicSuffixListInterface;
}