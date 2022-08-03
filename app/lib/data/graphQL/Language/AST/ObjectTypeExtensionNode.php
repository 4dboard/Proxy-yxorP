<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ObjectTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::OBJECT_TYPE_EXTENSION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<NamedTypeNode> */
    public NodeList $interfaces;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<FieldDefinitionNode> */
    public NodeList $fields;
}
