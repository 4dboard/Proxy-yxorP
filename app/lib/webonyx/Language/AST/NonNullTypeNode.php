<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class NonNullTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public $kind = NodeKind::NON_NULL_TYPE;

    /** @var NamedTypeNodeInterface|ListTypeNodeInterface */
    public $type;
}
