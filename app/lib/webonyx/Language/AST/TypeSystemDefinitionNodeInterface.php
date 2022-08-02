<?php

declare(strict_types=1);

namespace GraphQL\Language\AST;

/**
 * export type TypeSystemDefinitionNode =
 * | SchemaDefinitionNode
 * | TypeDefinitionNode
 * | TypeExtensionNode
 * | DirectiveDefinitionNode
 *
 * @property NameNodeInterface $name
 */
interface TypeSystemDefinitionNodeInterface extends DefinitionNodeInterface
{
}
