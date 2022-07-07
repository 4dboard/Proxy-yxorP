<?php declare(strict_types=1);

namespace Pdp;

use Countable;
use JsonSerializable;

interface host extends Countable, JsonSerializable
{
    public function value(): ?string;

    public function toString(): string;

    public function jsonSerialize(): ?string;

    public function count(): int;

    public function toAscii(): self;

    public function toUnicode(): self;
}