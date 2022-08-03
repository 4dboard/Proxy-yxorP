<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use Exception;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_bool;

abstract class BooleanType extends ScalarType
{
    /** @var string */
    public $name = Type::BOOLEAN;

    /** @var string */
    public $description = 'The `Boolean` scalar type represents `true` or `false`.';

    /**
     * Serialize the given value to a boolean.
     *
     * The GraphQL spec leaves this up to the implementations, so we just do what
     * PHP does natively to make this intuitive for developers.
     *
     * @param mixed $value
     */
    public function serialize(mixed $value): bool
    {
        return (bool)$value;
    }

    /**
     * @param mixed $value
     *
     * @return bool
     *
     * @throws Error
     */
    public function parseValue(mixed $value): bool
    {
        if (is_bool($value)) {
            return $value;
        }

        throw new Error('Boolean cannot represent a non boolean value: ' . Utils::printSafe($value));
    }

    /**
     * @param array|null $variables
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null)
    {
        if (!$valueNode instanceof BooleanValueNode) {
            // Intentionally without message, as all information already in wrapped Exception
            throw new Error();
        }

        return $valueNode->value;
    }
}
