<?php

namespace yxorP\app\lib\parser;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;

final class unableToResolveDomain extends InvalidArgumentException implements cannotProcessHostInterface
{
    private ?nameInterface $domain;

    #[Pure] private function __construct(string $message, ?nameInterface $domain = null)
    {
        parent::__construct($message);
        $this->domain = $domain;
    }

    public static function dueToInvalidSecondLevelDomain(nameInterface $domain): self
    {
        return new self('The submitted Second Level Domain is invalid `' . ($domain->value() ?? 'NULL') . '`; it should contains only one label.', $domain);
    }

    public static function dueToIdenticalValue(nameInterface $domain): self
    {
        return new self('The public suffix and the domain name are identical `' . $domain->toString() . '`.', $domain);
    }

    public static function dueToMissingSuffix(nameInterface $domain, string $type): self
    {
        return new self('The domain "' . ($domain->value() ?? 'NULL') . '" does not contain a "' . $type . '" TLD.', $domain);
    }

    public static function dueToUnresolvableDomain(nameInterface $domain): self
    {
        return new self('The domain "' . ($domain->value() ?? 'NULL') . '" can not contain a public suffix.', $domain);
    }

    public static function dueToMissingRegistrableDomain(nameInterface $domain): self
    {
        return new self('A subdomain can not be added to a domain "' . ($domain->value() ?? 'NULL') . '" without a registrable domain part.', $domain);
    }

    public function domain(): ?nameInterface
    {
        return $this->domain;
    }
}