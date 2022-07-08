<?php

namespace yxorP\parser;

use Countable;
use JsonSerializable;

interface aHostInterface extends Countable, JsonSerializable, aaDomainNameInterface, effectiveTopLevelDomainInterface, effectiveTopLevelDomainInterface
{
    public function value(): ?string;

    public function toString(): string;

    public function jsonSerialize(): ?string;

    public function count(): int;

    public function toAscii(): self;

    public function toUnicode(): self;
}