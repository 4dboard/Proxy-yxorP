<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ArgumentNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::ARGUMENT;

    /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode */
    public ObjectValueNode|EnumValueNode|FloatValueNode|BooleanValueNode|StringValueNode|IntValueNode|VariableNode|NullValueNode|ListValueNode $value;

    /** @var NameNode */
    public NameNode $name;
}
