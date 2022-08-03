<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InputValueDefinitionNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::INPUT_VALUE_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
    public NamedTypeNode|ListTypeNode|NonNullTypeNode $type;

    /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
    public ObjectValueNode|EnumValueNode|FloatValueNode|BooleanValueNode|null|StringValueNode|IntValueNode|VariableNode|NullValueNode|ListValueNode $defaultValue;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
