<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ObjectValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::OBJECT;

    /** @var NodeList<ObjectFieldNode> */
    public NodeList $fields;
}
