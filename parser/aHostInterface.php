<?php

namespace yxorP\parser;

use Countable;
use JsonSerializable;

interface hostInterface extends Countable, JsonSerializable
{
    public function value(): ?string;

    public function toString(): string;

    public function jsonSerialize(): ?string;

    public function count(): int;

    public function toAscii(): self;

    public function toUnicode(): self;
}