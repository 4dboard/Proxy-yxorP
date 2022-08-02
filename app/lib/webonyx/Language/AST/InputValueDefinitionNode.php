<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class InputValueDefinitionNode extends Node
{
    /** @var string */
    public $kind = NodeKind::INPUT_VALUE_DEFINITION;

    /** @var NameNodeInterface */
    public $name;

    /** @var NamedTypeNodeInterface|ListTypeNodeInterface|NonNullTypeNode */
    public $type;

    /** @var VariableNodeInterface|NullValueNodeInterface|IntValueNodeInterface|FloatValueNodeInterface|StringValueNodeInterface|BooleanValueNodeInterface|EnumValueNodeInterface|ListValueNodeInterface|ObjectValueNodeInterface|null */
    public $defaultValue;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var StringValueNodeInterface|null */
    public $description;
}
