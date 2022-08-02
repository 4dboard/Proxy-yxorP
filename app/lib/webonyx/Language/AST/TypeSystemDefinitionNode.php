<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Language\AST;

/**
 * export type TypeSystemDefinitionNode =
 * | SchemaDefinitionNode
 * | TypeDefinitionNode
 * | TypeExtensionNode
 * | DirectiveDefinitionNode
 *
 * @property NameNode $name
 */
interface TypeSystemDefinitionNode extends DefinitionNode
{
}
