<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\topLevelDomainList;

interface topLevelDomainListClient
{
    public function get(string $uri): topLevelDomainList;
}