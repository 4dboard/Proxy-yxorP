<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class EnumValueDefinitionNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::ENUM_VALUE_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
