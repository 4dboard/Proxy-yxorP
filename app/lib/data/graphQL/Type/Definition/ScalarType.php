<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_string;

/**
 * Scalar Type Definition
 *
 * The leaf values of any request and input values to arguments are
 * Scalars (or Enums) and are defined with a name and a series of coercion
 * functions used to ensure validity.
 *
 * Example:
 *
 * class OddType extends ScalarType
 * {
 *     public $name = 'Odd',
 *     public function serialize($value)
 *     {
 *         return $value % 2 === 1 ? $value : null;
 *     }
 * }
 */
abstract class ScalarType extends Type implements OutputType, InputType, LeafType, NullableType, NamedType
{
    /** @var ScalarTypeDefinitionNode|null */
    public $astNode;

    /** @var ScalarTypeExtensionNode[] */
    public $extensionASTNodes;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->name = $config['name'] ?? $this->tryInferName();
        $this->description = $config['description'] ?? $this->description;
        $this->astNode = $config['astNode'] ?? null;
        $this->extensionASTNodes = $config['extensionASTNodes'] ?? null;
        $this->config = $config;

        Utils::invariant(is_string($this->name), 'Must provide name.');
    }
}
