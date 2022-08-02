<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class FragmentDefinitionNode extends Node implements ExecutableDefinitionNodeInterface, HasSelectionSetInterface
{
    /** @var string */
    public $kind = NodeKind::FRAGMENT_DEFINITION;

    /** @var NameNodeInterface */
    public $name;

    /**
     * Note: fragment variable definitions are experimental and may be changed
     * or removed in the future.
     *
     * @var NodeList<VariableDefinitionNode>
     */
    public $variableDefinitions;

    /** @var NamedTypeNodeInterface */
    public $typeCondition;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var SelectionSetNode */
    public $selectionSet;
}
