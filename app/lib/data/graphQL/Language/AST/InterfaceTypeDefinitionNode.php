<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InterfaceTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::INTERFACE_TYPE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<NamedTypeNode> */
    public $interfaces;

    /** @var NodeList<FieldDefinitionNode> */
    public $fields;

    /** @var StringValueNode|null */
    public $description;
}
