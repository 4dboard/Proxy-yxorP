<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class NamedTypeNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public $kind = NodeKind::NAMED_TYPE;

    /** @var NameNode */
    public $name;
}
