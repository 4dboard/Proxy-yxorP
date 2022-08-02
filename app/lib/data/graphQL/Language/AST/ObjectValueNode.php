<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class ObjectValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public $kind = NodeKind::OBJECT;

    /** @var NodeList<ObjectFieldNode> */
    public $fields;
}
