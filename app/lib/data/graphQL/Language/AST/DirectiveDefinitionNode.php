<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class DirectiveDefinitionNode extends Node implements TypeSystemDefinitionNode
{
    /** @var string */
    public string $kind = NodeKind::DIRECTIVE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;

    /** @var NodeList<InputValueDefinitionNode> */
    public NodeList $arguments;

    /** @var bool */
    public bool $repeatable;

    /** @var NodeList<NameNode> */
    public NodeList $locations;
}
