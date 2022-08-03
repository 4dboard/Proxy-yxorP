<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FragmentSpreadNode extends Node implements SelectionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::FRAGMENT_SPREAD;

    /** @var NameNode */
    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;
}
