<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Language\AST;

class DocumentNode extends Node
{
    /** @var string */
    public $kind = NodeKind::DOCUMENT;

    /** @var NodeList<DefinitionNode&Node> */
    public $definitions;
}
