<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

class OperationDefinitionNode extends Node implements ExecutableDefinitionNodeInterface, HasSelectionSetInterface
{
    /** @var string */
    public $kind = NodeKind::OPERATION_DEFINITION;

    /** @var NameNodeInterface|null */
    public $name;

    /** @var string (oneOf 'query', 'mutation', 'subscription')) */
    public $operation;

    /** @var NodeList<VariableDefinitionNode> */
    public $variableDefinitions;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var SelectionSetNode */
    public $selectionSet;
}
