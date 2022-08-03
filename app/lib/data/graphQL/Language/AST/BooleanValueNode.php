<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class BooleanValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::BOOLEAN;

    /** @var bool */
    public bool $value;
}
