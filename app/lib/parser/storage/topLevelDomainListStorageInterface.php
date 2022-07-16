<?php

namespace yxorP\app\lib\parser\storage;
interface topLevelDomainListStorageInterface extends topLevelDomainListClientInterface
{
    public function delete(string $uri): bool;
}