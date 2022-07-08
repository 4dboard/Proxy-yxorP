<?php

namespace yxorP\parser\Storage;
interface publicSuffixListStorageInterface extends publicSuffixListClientInterface
{
    public function delete(string $uri): bool;
}