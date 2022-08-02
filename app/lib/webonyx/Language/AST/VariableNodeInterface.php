<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class VariableNodeInterface extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::VARIABLE;

    /** @var NameNodeInterface */
    public $name;
}
