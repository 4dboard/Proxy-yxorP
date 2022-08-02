<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ListValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::LST;

    /** @var NodeList<ValueNodeInterface&Node> */
    public $values;
}
