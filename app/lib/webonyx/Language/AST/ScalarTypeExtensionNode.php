<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class ScalarTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::SCALAR_TYPE_EXTENSION;

    /** @var NameNodeInterface */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;
}
