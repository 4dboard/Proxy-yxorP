<?php

namespace yxorP\inc\parser;

use JetBrains\PhpStorm\Pure;
use function count;
use function in_array;

final class suffix implements effectiveTopLevelDomainInterface
{
    private const ICANN = 'ICANN';
    private const PRIVATE = 'PRIVATE';
    private const IANA = 'IANA';
    private domainNameInterface $domain;
    private string $section;

    private function __construct(domainNameInterface $domain, string $section)
    {
        $this->domain = $domain;
        $this->section = $section;
    }

    #[Pure] public static function __set_state(array $properties): self
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

    private static function setDomainName($domain): domainNameInterface
    {
        if ($domain instanceof domainNameProviderInterface) {
            $domain = $domain->domain();
        }
        if (!$domain instanceof domainNameInterface) {
            $domain = domain::fromIDNA2008($domain);
        }
        if ('' === $domain->label(0)) {
            throw syntaxError::dueToInvalidSuffix($domain);
        }
        return $domain;
    }

    public function domain(): domainNameInterface
    {
        return $this->domain;
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

    public function normalize(domainNameInterface $domain): self
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