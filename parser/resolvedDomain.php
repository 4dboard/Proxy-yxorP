<?php

namespace yxorP\parser;

use function count;

final class resolvedDomain implements resolvedInterfaceDomainNameInterface
{
    private aaDomainNameInterface $domain;
    private effectiveTopLevelDomainInterface $suffix;
    private aaDomainNameInterface $secondLevelDomain;
    private aaDomainNameInterface $registrableDomain;
    private aaDomainNameInterface $subDomain;

    private function __construct(aaDomainNameInterface $domain, effectiveTopLevelDomainInterface $suffix)
    {
        $this->domain = $domain;
        $this->suffix = $suffix;
        $this->validateState();
    }

    private function validateState(): void
    {
        $suffixValue = $this->suffix->value();
        if (null === $suffixValue) {
            $nullDomain = $this->domain->clear();
            $this->registrableDomain = $nullDomain;
            $this->secondLevelDomain = $nullDomain;
            $this->subDomain = $nullDomain;
            return;
        }
        if (2 > count($this->domain)) {
            throw unableToResolveDomain::dueToUnresolvableDomain($this->domain);
        }
        if ($this->domain->value() === $suffixValue) {
            throw unableToResolveDomain::dueToIdenticalValue($this->domain);
        }
        $length = count($this->suffix);
        $this->registrableDomain = $this->domain->slice(0, $length + 1);
        $this->secondLevelDomain = $this->domain->slice($length, 1);
        $this->subDomain = $this->domain->slice($length + 1);
    }

    public function value(): ?string
    {
        return $this->domain->value();
    }

    public static function fromICANN($domain, int $suffixLength): self
    {
        $domain = self::setDomainName($domain);
        return new self($domain, suffix::fromICANN($domain->slice(0, $suffixLength)));
    }

    private static function setDomainName($domain): aaDomainNameInterface
    {
        if ($domain instanceof domainNameProviderInterface) {
            return $domain->domain();
        }
        if ($domain instanceof aaDomainNameInterface) {
            return $domain;
        }
        return aaDomain::fromIDNA2008($domain);
    }

    public function domain(): aaDomainNameInterface
    {
        return $this->domain;
    }

    public static function fromPrivate($domain, int $suffixLength): self
    {
        $domain = self::setDomainName($domain);
        return new self($domain, suffix::fromPrivate($domain->slice(0, $suffixLength)));
    }

    public static function fromIANA($domain): self
    {
        $domain = self::setDomainName($domain);
        return new self($domain, suffix::fromIANA($domain->label(0)));
    }

    public static function fromUnknown($domain, int $suffixLength = 0): self
    {
        $domain = self::setDomainName($domain);
        return new self($domain, suffix::fromUnknown($domain->slice(0, $suffixLength)));
    }

    public static function __set_state(array $properties): self
    {
        return new self($properties['domain'], $properties['suffix']);
    }

    public function count(): int
    {
        return count($this->domain);
    }

    public function jsonSerialize(): ?string
    {
        return $this->domain->jsonSerialize();
    }

    public function toString(): string
    {
        return $this->domain->toString();
    }

    public function registrableDomain(): aaDomainNameInterface
    {
        return $this->registrableDomain;
    }

    public function secondLevelDomain(): aaDomainNameInterface
    {
        return $this->secondLevelDomain;
    }

    public function subDomain(): aaDomainNameInterface
    {
        return $this->subDomain;
    }

    public function suffix(): effectiveTopLevelDomainInterface
    {
        return $this->suffix;
    }

    public function toAscii(): self
    {
        return new self($this->domain->toAscii(), $this->suffix->toAscii());
    }

    public function toUnicode(): self
    {
        return new self($this->domain->toUnicode(), $this->suffix->toUnicode());
    }

    public function withSuffix($suffix): self
    {
        if (!$suffix instanceof effectiveTopLevelDomainInterface) {
            $suffix = suffix::fromUnknown($suffix);
        }
        return new self($this->domain->slice(count($this->suffix))->append($suffix), $suffix->normalize($this->domain));
    }

    public function withSubDomain($subDomain): self
    {
        if (null === $this->suffix->value()) {
            throw unableToResolveDomain::dueToMissingRegistrableDomain($this->domain);
        }
        $subDomain = $this->domain->clear()->append(self::setDomainName($subDomain));
        if ($this->subDomain->value() === $subDomain->value()) {
            return $this;
        }
        return new self($this->registrableDomain->prepend($subDomain), $this->suffix);
    }

    public function withSecondLevelDomain($label): self
    {
        if (null === $this->suffix->value()) {
            throw unableToResolveDomain::dueToMissingRegistrableDomain($this->domain);
        }
        $label = self::setDomainName($label);
        if (1 !== count($label)) {
            throw unableToResolveDomain::dueToInvalidSecondLevelDomain($label);
        }
        $newRegistrableDomain = $this->registrableDomain->withoutLabel(-1)->prepend($label);
        if ($newRegistrableDomain->value() === $this->registrableDomain->value()) {
            return $this;
        }
        return new self($newRegistrableDomain->prepend($this->subDomain), $this->suffix);
    }
}