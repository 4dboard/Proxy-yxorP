<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class SchemaDefinitionNode extends Node implements TypeSystemDefinitionNode
{
    /** @var string */
    public $kind = NodeKind::SCHEMA_DEFINITION;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<OperationTypeDefinitionNode> */
    public $operationTypes;
}
