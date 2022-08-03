<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class SchemaTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::SCHEMA_EXTENSION;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<OperationTypeDefinitionNode> */
    public NodeList $operationTypes;
}
