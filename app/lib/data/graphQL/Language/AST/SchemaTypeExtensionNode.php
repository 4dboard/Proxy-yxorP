<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class SchemaTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::SCHEMA_EXTENSION;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<OperationTypeDefinitionNode> */
    public $operationTypes;
}
