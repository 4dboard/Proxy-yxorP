<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InlineFragmentNode extends Node implements SelectionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::INLINE_FRAGMENT;

    /** @var NamedTypeNode */
    public NamedTypeNode $typeCondition;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var SelectionSetNode */
    public SelectionSetNode $selectionSet;
}
