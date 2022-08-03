<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class OperationTypeDefinitionNode extends Node
{
    /** @var string */
    public string $kind = NodeKind::OPERATION_TYPE_DEFINITION;

    /**
     * One of 'query' | 'mutation' | 'subscription'
     *
     * @var string
     */
    public string $operation;

    /** @var NamedTypeNode */
    public NamedTypeNode $type;
}
