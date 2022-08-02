<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class DirectiveNode extends Node
{
    /** @var string */
    public $kind = NodeKind::DIRECTIVE;

    /** @var NameNode */
    public $name;

    /** @var NodeList<ArgumentNode> */
    public $arguments;
}
