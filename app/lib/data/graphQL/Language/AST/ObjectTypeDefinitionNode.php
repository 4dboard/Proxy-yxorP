<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ObjectTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::OBJECT_TYPE_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<NamedTypeNode> */
    public NodeList $interfaces;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<FieldDefinitionNode> */
    public NodeList $fields;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
