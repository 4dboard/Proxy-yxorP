<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class UnionTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::UNION_TYPE_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<NamedTypeNode> */
    public NodeList $types;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
