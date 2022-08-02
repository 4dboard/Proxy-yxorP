<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language\AST;

class InputObjectTypeExtensionNode extends Node implements TypeExtensionNodeInterface
{
    /** @var string */
    public $kind = NodeKind::INPUT_OBJECT_TYPE_EXTENSION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public $directives;

    /** @var NodeList<InputValueDefinitionNode> */
    public $fields;
}
