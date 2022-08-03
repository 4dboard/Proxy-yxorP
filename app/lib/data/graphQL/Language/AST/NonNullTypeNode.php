<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class NonNullTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::NON_NULL_TYPE;

    /** @var NamedTypeNode|ListTypeNode */
    public NamedTypeNode|ListTypeNode $type;
}
