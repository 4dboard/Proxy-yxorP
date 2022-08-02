<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Language\AST;

class NonNullTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public $kind = NodeKind::NON_NULL_TYPE;

    /** @var NamedTypeNode|ListTypeNode */
    public $type;
}
