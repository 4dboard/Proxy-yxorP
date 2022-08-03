<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class StringValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::STRING;

    /** @var string */
    public string $value;

    /** @var bool */
    public bool $block;
}
