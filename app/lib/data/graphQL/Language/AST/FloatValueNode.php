<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FloatValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::FLOAT;

    /** @var string */
    public string $value;
}
