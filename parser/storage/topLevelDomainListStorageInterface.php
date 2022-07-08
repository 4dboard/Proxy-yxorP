<?php declare(strict_types=1);

namespace yxorP\parser\Storage;
interface topLevelDomainListStorage extends topLevelDomainListClient
{
    public function delete(string $uri): bool;
}