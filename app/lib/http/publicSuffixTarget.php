<?php namespace yxorP\app\lib\http;

use yxorP\app\lib\parser\hostInterface;
use yxorP\app\lib\parser\nameInterface;
use yxorP\app\lib\parser\resolvedDomainNameInterface;
use yxorP\app\lib\parser\topLevelDomainInterface;

class publicSuffixTarget implements resolvedDomainNameInterface
{
    public function suffix(): topLevelDomainInterface
    {
        return new topLevelDomain('com');
    }

    public function secondLevelDomain(): nameInterface
    {
        return new name('example');
    }

    public function registrableDomain(): nameInterface
    {
        return new name('example');
    }

    public function subDomain(): nameInterface
    {
        return new name('example');
    }

    public function withSubDomain(nameInterface $subDomain): self
    {
        return new publicSuffixHost($subDomain->toString());
    }

    public function toString(): string
    {
        // TODO: Implement toString() method.
    }

    public function withSecondLevelDomain(nameInterface $label): self
    {
        return new publicSuffixHost($label->toString());
    }

    public function withSuffix(topLevelDomainInterface $suffix): self
    {
        return new publicSuffixHost($suffix->toString());
    }

    public function domain(): nameInterface
    {
        // TODO: Implement domain() method.
    }

    public function value(): ?string
    {
        // TODO: Implement value() method.
    }

    public function jsonSerialize(): ?string
    {
        // TODO: Implement jsonSerialize() method.
    }

    public function count(): int
    {
        // TODO: Implement count() method.
    }

    public function toAscii(): hostInterface
    {
        // TODO: Implement toAscii() method.
    }

    public function toUnicode(): hostInterface
    {
        // TODO: Implement toUnicode() method.
    }
}
