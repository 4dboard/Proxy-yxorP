<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class IntValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::INT;

    /** @var string */
    public $value;
}
