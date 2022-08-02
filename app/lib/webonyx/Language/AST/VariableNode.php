<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Language\AST;

class VariableNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::VARIABLE;

    /** @var NameNode */
    public $name;
}
