<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class EnumTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::ENUM_TYPE_EXTENSION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<EnumValueDefinitionNode> */
    public NodeList $values;
}
