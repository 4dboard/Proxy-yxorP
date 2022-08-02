<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FieldNode extends Node implements SelectionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::FIELD;

    /** @var NameNode */
    public $name;

    /** @var NameNode|null */
    public $alias;

    /** @var NodeList<ArgumentNode> */
    public $arguments;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var SelectionSetNode|null */
    public $selectionSet;
}
