<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class DocumentNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::DOCUMENT;

    /** @var NodeList<DefinitionNode&Node> */
    public NodeList $definitions;
}
