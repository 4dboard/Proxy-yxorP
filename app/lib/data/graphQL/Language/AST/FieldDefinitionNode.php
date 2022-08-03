<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FieldDefinitionNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::FIELD_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<InputValueDefinitionNode> */
    public NodeList $arguments;

    /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
    public NamedTypeNode|ListTypeNode|NonNullTypeNode $type;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
