<?php

namespace yxorP\app\lib\parser\storage;
interface publicSuffixListStorageInterface extends publicSuffixListClientInterface
{
    public function delete(string $uri): bool;
}