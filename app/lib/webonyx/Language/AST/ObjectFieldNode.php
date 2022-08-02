<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class ObjectFieldNode extends Node
{
    /** @var string */
    public $kind = NodeKind::OBJECT_FIELD;

    /** @var NameNodeInterface */
    public $name;

    /** @var VariableNodeInterface|NullValueNodeInterface|IntValueNodeInterface|FloatValueNodeInterface|StringValueNodeInterface|BooleanValueNodeInterface|EnumValueNodeInterface|ListValueNodeInterface|ObjectValueNodeInterface */
    public $value;
}
