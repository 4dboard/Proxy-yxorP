<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class IntValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::INT;

    /** @var string */
    public string $value;
}
