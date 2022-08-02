<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class FloatValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::FLOAT;

    /** @var string */
    public $value;
}
