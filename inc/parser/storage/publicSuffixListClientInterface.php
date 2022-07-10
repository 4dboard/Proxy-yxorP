<?php

namespace yxorP\inc\parser\storage;

use yxorP\inc\parser\publicSuffixListInterface;

interface publicSuffixListClientInterface
{
    public function get(string $uri): publicSuffixListInterface;
}