<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class VariableDefinitionNode extends Node implements DefinitionNode
{
    /** @var string */
    public string $kind = NodeKind::VARIABLE_DEFINITION;

    /** @var VariableNode */
    public VariableNode $variable;

    /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
    public NamedTypeNode|ListTypeNode|NonNullTypeNode $type;

    /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode|null */
    public ObjectValueNode|EnumValueNode|FloatValueNode|BooleanValueNode|null|StringValueNode|IntValueNode|VariableNode|NullValueNode|ListValueNode $defaultValue;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;
}
