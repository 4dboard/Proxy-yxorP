<?php

namespace yxorP\inc\parser;

use Iterator;

interface nameInterface extends hostInterface
{
    public function isAscii(): bool;

    public function label(int $key): ?string;

    public function labels(): array;

    public function keys(string $label = null): array;

    public function getIterator(): Iterator;

    public function prepend($label): self;

    public function append($label): self;

    public function withLabel(int $key, $label): self;

    public function withoutLabel(int $key, int ...$keys): self;

    public function clear(): mixed;

    public function slice(int $offset, int $length = null): self;
}