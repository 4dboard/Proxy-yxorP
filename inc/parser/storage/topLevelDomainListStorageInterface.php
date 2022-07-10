<?php

namespace yxorP\inc\parser\storage;
interface topLevelDomainListStorageInterface extends topLevelDomainListClientInterface
{
    public function delete(string $uri): bool;
}