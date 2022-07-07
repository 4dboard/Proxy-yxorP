<?php declare(strict_types=1);

namespace Pdp\Storage;
interface topLevelDomainListStorage extends topLevelDomainListClient
{
    public function delete(string $uri): bool;
}