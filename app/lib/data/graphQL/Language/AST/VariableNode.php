<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class VariableNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::VARIABLE;

    /** @var NameNode */
    public NameNode $name;
}
