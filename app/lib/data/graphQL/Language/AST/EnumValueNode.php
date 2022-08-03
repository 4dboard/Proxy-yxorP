<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class EnumValueNode extends Node implements ValueNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::ENUM;

    /** @var string */
    public string $value;
}
