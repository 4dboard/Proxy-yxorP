<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class OperationDefinitionNode extends Node implements ExecutableDefinitionNode, HasSelectionSetInterface
{
    /** @var string */
    public string $kind = NodeKind::OPERATION_DEFINITION;

    /** @var NameNode */
    public NameNode $name;

    /** @var string (oneOf 'query', 'mutation', 'subscription')) */
    public string $operation;

    /** @var NodeList<VariableDefinitionNode> */
    public NodeList $variableDefinitions;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var SelectionSetNode */
    public $selectionSet;
}
