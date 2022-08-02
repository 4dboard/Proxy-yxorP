<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InterfaceTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::INTERFACE_TYPE_EXTENSION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<InterfaceTypeDefinitionNode> */
    public $interfaces;

    /** @var NodeList<FieldDefinitionNode> */
    public $fields;
}
