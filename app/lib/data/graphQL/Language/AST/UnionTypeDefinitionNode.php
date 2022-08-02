<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class UnionTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::UNION_TYPE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<NamedTypeNode> */
    public $types;

    /** @var StringValueNode|null */
    public $description;
}
