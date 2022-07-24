<?php namespace yxorP\app\lib\http;

use yxorP\app\lib\parser\hostInterface;
use yxorP\app\lib\parser\nameInterface;
use yxorP\app\lib\parser\topLevelDomainInterface;
use yxorP\app\yP;

class publicSuffixTarget
{
    public function suffix(): topLevelDomainInterface
    {
        return new topLevelDomain(explode('.', yP::store(ENV_DEFAULT_TARGET))[1]);
    }

    public function secondLevelDomain(): nameInterface
    {
        return new name(explode('.', yP::store(ENV_DEFAULT_TARGET))[0]);
    }


    public function subDomain(): nameInterface
    {
        return new name(explode('.', yP::store(ENV_DEFAULT_TARGET))[0]);
    }

    public function withSubDomain(nameInterface $subDomain): self
    {
        return new publicSuffixTarget(yP::store(ENV_DEFAULT_TARGET));
    }

    public function registrableDomain(): string
    {
        return new publicSuffixTarget(yP::store(ENV_DEFAULT_HOST));
    }
    public function toString(): string
    {
        // TODO: Implement toString() method.
    }

    public function withSecondLevelDomain(nameInterface $label): self
    {
        // TODO: Implement toString() method.
    }

    public function withSuffix(topLevelDomainInterface $suffix): self
    {
        // TODO: Implement toString() method.
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
