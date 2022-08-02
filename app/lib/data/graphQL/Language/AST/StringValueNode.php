<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class StringValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::STRING;

    /** @var string */
    public $value;

    /** @var bool */
    public $block;
}
