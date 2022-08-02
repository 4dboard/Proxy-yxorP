<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class InlineFragmentNode extends Node implements SelectionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::INLINE_FRAGMENT;

    /** @var NamedTypeNode */
    public $typeCondition;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var SelectionSetNode */
    public $selectionSet;
}
