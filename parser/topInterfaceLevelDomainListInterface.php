<?php

namespace yxorP\parser;

use Countable;
use DateTimeImmutable;
use Iterator;
use IteratorAggregate;

interface topInterfaceLevelDomainListInterface extends Countable, domainNameResolverInterface, IteratorAggregate
{
    public function version(): string;

    public function lastUpdated(): DateTimeImmutable;

    public function count(): int;

    public function isEmpty(): bool;

    public function getIterator(): Iterator;

    public function getIANADomain(bHostInterface $host): resolvedInterfaceDomainNameInterface;
}