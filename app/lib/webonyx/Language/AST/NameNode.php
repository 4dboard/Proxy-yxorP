<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class NameNode extends Node implements TypeNodeInterface
{
    /** @var string */
    public $kind = NodeKind::NAME;

    /** @var string */
    public $value;
}
