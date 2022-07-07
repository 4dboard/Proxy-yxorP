<?php declare(strict_types=1);

namespace Pdp;

use function count;
use function in_array;

final class suffix implements effectiveTopLevelDomain
{
    private const ICANN = 'ICANN';
    private const PRIVATE = 'PRIVATE';
    private const IANA = 'IANA';
    private domainName $domain;
    private string $section;

    private function __construct(domainName $domain, string $section)
    {
        $this->domain = $domain;
        $this->section = $section;
    }

    public static function __set_state(array $properties): self
    {
        return new self($properties['domain'], $properties['section']);
    }

    public static function fromICANN($domain): self
    {
        $domain = self::setDomainName($domain);
        if (1 > count($domain)) {
            throw syntaxError::dueToInvalidSuffix($domain, self::ICANN);
        }
        return new self($domain, self::ICANN);
    }

    public static function fromPrivate($domain): self
    {
        $domain = self::setDomainName($domain);
        if (1 > count($domain)) {
            throw syntaxError::dueToInvalidSuffix($domain, self::PRIVATE);
        }
        return new self($domain, self::PRIVATE);
    }

    public static function fromIANA($domain): self
    {
        $domain = self::setDomainName($domain);
        if (1 !== count($domain)) {
            throw syntaxError::dueToInvalidSuffix($domain, self::IANA);
        }
        return new self($domain, self::IANA);
    }

    public static function fromUnknown($domain): self
    {
        return new self(self::setDomainName($domain), '');
    }

    private static function setDomainName($domain): domainName
    {
        if ($domain instanceof domainNameProvider) {
            $domain = $domain->domain();
        }
        if (!$domain instanceof domainName) {
            $domain = domain::fromIDNA2008($domain);
        }
        if ('' === $domain->label(0)) {
            throw syntaxError::dueToInvalidSuffix($domain);
        }
        return $domain;
    }

    public function domain(): domainName
    {
        return $this->domain;
    }

    public function isKnown(): bool
    {
        return '' !== $this->section;
    }

    public function isIANA(): bool
    {
        return self::IANA === $this->section;
    }

    public function isPublicSuffix(): bool
    {
        return in_array($this->section, [self::ICANN, self::PRIVATE], true);
    }

    public function isICANN(): bool
    {
        return self::ICANN === $this->section;
    }

    public function isPrivate(): bool
    {
        return self::PRIVATE === $this->section;
    }

    public function count(): int
    {
        return count($this->domain);
    }

    public function jsonSerialize(): ?string
    {
        return $this->domain->jsonSerialize();
    }

    public function value(): ?string
    {
        return $this->domain->value();
    }

    public function toString(): string
    {
        return $this->domain->toString();
    }

    public function normalize(domainName $domain): self
    {
        $newDomain = $domain->clear()->append($this->toUnicode());
        if ($domain->isAscii()) {
            $newDomain = $newDomain->toAscii();
        }
        $clone = clone $this;
        $clone->domain = $newDomain;
        return $clone;
    }

    public function toUnicode(): self
    {
        $clone = clone $this;
        $clone->domain = $this->domain->toUnicode();
        return $clone;
    }

    public function toAscii(): self
    {
        $clone = clone $this;
        $clone->domain = $this->domain->toAscii();
        return $clone;
    }
}