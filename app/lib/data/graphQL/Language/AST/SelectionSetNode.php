<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class SelectionSetNode extends Node
{
    /** @var string */
    public $kind = NodeKind::SELECTION_SET;

    /** @var NodeList<SelectionNodeInterface&Node> */
    public $selections;
}
