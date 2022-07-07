<?php declare(strict_types=1);

namespace Pdp;

use Countable;
use DateTimeImmutable;
use Iterator;
use IteratorAggregate;

interface topLevelDomainList extends Countable, domainNameResolver, IteratorAggregate
{
    public function version(): string;

    public function lastUpdated(): DateTimeImmutable;

    public function count(): int;

    public function isEmpty(): bool;

    public function getIterator(): Iterator;

    public function getIANADomain(host $host): resolvedDomainName;
}