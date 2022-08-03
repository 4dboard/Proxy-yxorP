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
    public $line;

    /** @var int */
    public $column;

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
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toSerializableArray();
    }

    /**
     * @return int[]
     */
    #[Pure] public function toSerializableArray()
    {
        return $this->toArray();
    }

    /**
     * @return int[]
     */
    #[ArrayShape(['line' => "int", 'column' => "int"])] public function toArray()
    {
        return [
            'line' => $this->line,
            'column' => $this->column,
        ];
    }
}
