<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class SelectionSetNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::SELECTION_SET;

    /** @var NodeList<SelectionNodeInterface&Node> */
    public NodeList $selections;
}
