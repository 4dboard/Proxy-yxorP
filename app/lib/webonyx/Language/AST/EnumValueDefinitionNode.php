<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class EnumValueDefinitionNode extends Node
{
    /** @var string */
    public $kind = NodeKind::ENUM_VALUE_DEFINITION;

    /** @var NameNodeInterface */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var StringValueNodeInterface|null */
    public $description;
}
