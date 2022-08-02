<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class DirectiveNode extends Node
{
    /** @var string */
    public $kind = NodeKind::DIRECTIVE;

    /** @var NameNodeInterface */
    public $name;

    /** @var NodeList<ArgumentNode> */
    public $arguments;
}
