<?php

namespace yxorP\app\lib\parser\storage;

use yxorP\app\lib\parser\publicSuffixListInterface;

interface publicSuffixListClientInterface
{
    public function get(string $uri): publicSuffixListInterface;
}