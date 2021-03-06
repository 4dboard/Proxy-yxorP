<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class EnumTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::ENUM_TYPE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<EnumValueDefinitionNode> */
    public NodeList $values;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
