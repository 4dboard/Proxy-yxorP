<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class NamedTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::NAMED_TYPE;

    /** @var NameNode */
    public NameNode $name;
}
