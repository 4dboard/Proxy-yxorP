<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ObjectFieldNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::OBJECT_FIELD;

    /** @var NameNode */
    public NameNode $name;

    /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode */
    public ObjectValueNode|EnumValueNode|FloatValueNode|BooleanValueNode|StringValueNode|IntValueNode|VariableNode|NullValueNode|ListValueNode $value;
}
