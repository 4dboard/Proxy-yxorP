<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language\AST;

class InputObjectTypeDefinitionNode extends Node implements TypeDefinitionNodeInterface
{
    /** @var string */
    public string $kind = NodeKind::INPUT_OBJECT_TYPE_DEFINITION;

    /** @var NameNode */
    public $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;

    /** @var NodeList<InputValueDefinitionNode> */
    public NodeList $fields;

    /** @var StringValueNode|null */
    public ?StringValueNode $description;
}
