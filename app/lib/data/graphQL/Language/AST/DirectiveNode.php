<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class DirectiveNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::DIRECTIVE;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<ArgumentNode> */
    public NodeList $arguments;
}
