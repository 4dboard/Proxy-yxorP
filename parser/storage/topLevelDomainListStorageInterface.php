<?php

namespace yxorP\parser\Storage;
interface topLevelDomainListStorageInterface extends topLevelDomainListClientInterface
{
    public function delete(string $uri): bool;
}