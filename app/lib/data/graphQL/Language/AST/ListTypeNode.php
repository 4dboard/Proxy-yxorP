<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class ListTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public $kind = NodeKind::LIST_TYPE;

    /** @var NamedTypeNode|ListTypeNode|NonNullTypeNode */
    public $type;
}
