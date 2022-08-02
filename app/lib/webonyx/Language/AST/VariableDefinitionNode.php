<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class VariableDefinitionNode extends Node implements DefinitionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::VARIABLE_DEFINITION;

    /** @var VariableNodeInterface */
    public $variable;

    /** @var NamedTypeNodeInterface|ListTypeNodeInterface|NonNullTypeNode */
    public $type;

    /** @var VariableNodeInterface|NullValueNodeInterface|IntValueNodeInterface|FloatValueNodeInterface|StringValueNodeInterface|BooleanValueNodeInterface|EnumValueNodeInterface|ListValueNodeInterface|ObjectValueNodeInterface|null */
    public $defaultValue;

    /** @var NodeList<DirectiveNode> */
    public $directives;
}
