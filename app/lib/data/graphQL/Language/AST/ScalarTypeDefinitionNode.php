<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ScalarTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::SCALAR_TYPE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var StringValueNode|null */
    public $description;
}
