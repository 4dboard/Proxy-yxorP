<?php

namespace yxorP\inc\parser\storage;
interface publicSuffixListStorageInterface extends publicSuffixListClientInterface
{
    public function delete(string $uri): bool;
}