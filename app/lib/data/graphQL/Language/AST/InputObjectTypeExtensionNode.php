<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InputObjectTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::INPUT_OBJECT_TYPE_EXTENSION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<InputValueDefinitionNode> */
    public NodeList $fields;
}
