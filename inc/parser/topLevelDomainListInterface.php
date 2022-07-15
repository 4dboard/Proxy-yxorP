<?php

namespace yxorP\inc\parser;

use Countable;
use DateTimeImmutable;
use Iterator;
use IteratorAggregate;

interface topLevelDomainListInterface extends Countable, domainNameResolverInterface, IteratorAggregate
{
    public function version(): string;

    public function lastUpdated(): DateTimeImmutable;

    public function count(): int;

    public function isEmpty(): bool;

    public function getIterator(): Iterator;

    public function getIANADomain(hostInterface $host): resolvedDomainNameInterface;
}