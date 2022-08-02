<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

/**
 * export type TypeExtensionNode =
 * | ScalarTypeExtensionNode
 * | ObjectTypeExtensionNode
 * | InterfaceTypeExtensionNode
 * | UnionTypeExtensionNode
 * | EnumTypeExtensionNode
 * | InputObjectTypeExtensionNode;
 */
interface TypeExtensionNodeInterface extends TypeSystemDefinitionNode
{
}
