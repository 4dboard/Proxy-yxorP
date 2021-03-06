<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class NameNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::NAME;

    /** @var string */
    public string $value;
}
