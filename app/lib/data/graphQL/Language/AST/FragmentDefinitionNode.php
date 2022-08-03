<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class FragmentDefinitionNode extends Node implements ExecutableDefinitionNode, HasSelectionSetInterface
{
    /** @var string */
    public string $kind = NodeKind::FRAGMENT_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /**
     * Note: fragment variable definitions are experimental and may be changed
     * or removed in the future.
     *
     * @var NodeList<VariableDefinitionNode>
     */
    public NodeList $variableDefinitions;

    /** @var NamedTypeNode */
    public NamedTypeNode $typeCondition;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var SelectionSetNode */
    public $selectionSet;
}
