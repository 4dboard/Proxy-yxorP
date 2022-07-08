<?php

namespace yxorP\parser;

use Countable;
use JsonSerializable;

interface aHostInterface extends Countable, JsonSerializable, \yxorP\parser\domainNameInterface, \yxorP\parser\domainNameInterface, \yxorP\parser\effectiveTopLevelDomainInterface, \yxorP\parser\effectiveTopLevelDomainInterface
{
    public function value(): ?string;

    public function toString(): string;

    public function jsonSerialize(): ?string;

    public function count(): int;

    public function toAscii(): self;

    public function toUnicode(): self;
}