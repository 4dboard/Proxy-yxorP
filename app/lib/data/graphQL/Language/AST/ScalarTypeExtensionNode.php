<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ScalarTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::SCALAR_TYPE_EXTENSION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;
}
