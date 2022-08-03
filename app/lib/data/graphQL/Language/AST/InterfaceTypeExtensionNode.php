<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InterfaceTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::INTERFACE_TYPE_EXTENSION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<InterfaceTypeDefinitionNode> */
    public NodeList $interfaces;

    /** @var NodeList<FieldDefinitionNode> */
    public NodeList $fields;
}
