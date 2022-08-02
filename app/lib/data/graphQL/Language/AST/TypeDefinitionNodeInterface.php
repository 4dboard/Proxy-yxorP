<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

/**
 * export type TypeDefinitionNode = ScalarTypeDefinitionNode
 * | ObjectTypeDefinitionNode
 * | InterfaceTypeDefinitionNode
 * | UnionTypeDefinitionNode
 * | EnumTypeDefinitionNode
 * | InputObjectTypeDefinitionNode
 */
interface TypeDefinitionNodeInterface extends TypeSystemDefinitionNode
{
}
