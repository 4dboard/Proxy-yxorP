<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class BooleanValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::BOOLEAN;

    /** @var bool */
    public $value;
}
