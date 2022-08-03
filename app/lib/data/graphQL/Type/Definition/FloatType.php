<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use Exception;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_bool;
use function is_finite;
use function is_float;
use function is_int;
use function is_numeric;

class FloatType extends ScalarType
{
    /** @var string */
    public $name = Type::FLOAT;

    /** @var string */
    public $description =
        'The `Float` scalar type represents signed double-precision fractional
values as specified by
[IEEE 754](https://en.wikipedia.org/wiki/IEEE_floating_point). ';

    /**
     * @param mixed $value
     *
     * @throws Error
     */
    public function serialize(mixed $value): float
    {
        $float = is_numeric($value) || is_bool($value)
            ? (float)$value
            : null;

        if ($float === null || !is_finite($float)) {
            throw new Error(
                'Float cannot represent non numeric value: ' .
                Utils::printSafe($value)
            );
        }

        return $float;
    }

    /**
     * @param mixed $value
     *
     * @throws Error
     */
    public function parseValue(mixed $value): float
    {
        $float = is_float($value) || is_int($value)
            ? (float)$value
            : null;

        if ($float === null || !is_finite($float)) {
            throw new Error(
                'Float cannot represent non numeric value: ' .
                Utils::printSafe($value)
            );
        }

        return $float;
    }

    /**
     * @param array|null $variables
     *
     * @return float
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null): float
    {
        if ($valueNode instanceof FloatValueNode || $valueNode instanceof IntValueNode) {
            return (float)$valueNode->value;
        }

        // Intentionally without message, as all information already in wrapped Exception
        throw new Error();
    }
}
