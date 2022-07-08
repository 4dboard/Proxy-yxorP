<?php

namespace yxorP\parser;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;

final class unableToResolveDomain extends InvalidArgumentException implements cannotProcessHostInterface
{
    private ?aDomainNameInterface $domain;

    #[Pure] private function __construct(string $message, ?aDomainNameInterface $domain = null)
    {
        parent::__construct($message);
        $this->domain = $domain;
    }

    public static function dueToInvalidSecondLevelDomain(aDomainNameInterface $domain): self
    {
        return new self('The submitted Second Level Domain is invalid `' . ($domain->value() ?? 'NULL') . '`; it should contains only one label.', $domain);
    }

    public static function dueToIdenticalValue(aDomainNameInterface $domain): self
    {
        return new self('The public suffix and the domain name are identical `' . $domain->toString() . '`.', $domain);
    }

    public static function dueToMissingSuffix(aDomainNameInterface $domain, string $type): self
    {
        return new self('The domain "' . ($domain->value() ?? 'NULL') . '" does not contain a "' . $type . '" TLD.', $domain);
    }

    public static function dueToUnresolvableDomain(aDomainNameInterface $domain): self
    {
        return new self('The domain "' . ($domain->value() ?? 'NULL') . '" can not contain a public suffix.', $domain);
    }

    public static function dueToMissingRegistrableDomain(aDomainNameInterface $domain): self
    {
        return new self('A subdomain can not be added to a domain "' . ($domain->value() ?? 'NULL') . '" without a registrable domain part.', $domain);
    }

    public function domain(): ?aDomainNameInterface
    {
        return $this->domain;
    }
}