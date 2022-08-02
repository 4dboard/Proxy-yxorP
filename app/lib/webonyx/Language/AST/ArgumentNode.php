<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class ArgumentNode extends Node
{
    /** @var string */
    public $kind = NodeKind::ARGUMENT;

    /** @var VariableNodeInterface|NullValueNodeInterface|IntValueNodeInterface|FloatValueNodeInterface|StringValueNodeInterface|BooleanValueNodeInterface|EnumValueNodeInterface|ListValueNodeInterface|ObjectValueNodeInterface */
    public $value;

    /** @var NameNodeInterface */
    public $name;
}
