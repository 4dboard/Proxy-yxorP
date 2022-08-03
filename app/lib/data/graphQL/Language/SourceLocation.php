<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use JsonSerializable;
use ReturnTypeWillChange;

class SourceLocation implements JsonSerializable
{
    /** @var int */
    public int $line;

    /** @var int */
    public int $column;

    /**
     * @param int $line
     * @param int $col
     */
    public function __construct(int $line, int $col)
    {
        $this->line = $line;
        $this->column = $col;
    }

    /**
     * @return int[]
     */
    #[Pure] #[ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        return $this->toSerializableArray();
    }

    /**
     * @return int[]
     */
    #[ArrayShape(['line' => "int", 'column' => "int"])] #[Pure] public function toSerializableArray(): array
    {
        return $this->toArray();
    }

    /**
     * @return int[]
     */
    #[ArrayShape(['line' => "int", 'column' => "int"])] public function toArray(): array
    {
        return [
            'line' => $this->line,
            'column' => $this->column,
        ];
    }
}
