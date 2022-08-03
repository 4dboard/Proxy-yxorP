<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FieldNode extends Node implements SelectionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::FIELD;

    /** @var NameNode */
    public NameNode $name;

    /** @var NameNode|null */
    public ?NameNode $alias;

    /** @var NodeList<ArgumentNode> */
    public NodeList $arguments;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var SelectionSetNode|null */
    public ?SelectionSetNode $selectionSet;
}
