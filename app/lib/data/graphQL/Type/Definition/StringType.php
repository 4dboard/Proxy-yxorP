<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use Exception;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_object;
use function is_scalar;
use function is_string;
use function method_exists;

class StringType extends ScalarType
{
    /** @var string */
    public $name = Type::STRING;

    /** @var string */
    public $description =
        'The `String` scalar type represents textual data, represented as UTF-8
character sequences. The String type is most often used by GraphQL to
represent free-form human-readable text.';

    /**
     * @param mixed $value
     *
     * @return string
     *
     * @throws Error
     */
    public function serialize(mixed $value): string
    {
        $canCast = is_scalar($value)
            || (is_object($value) && method_exists($value, '__toString'))
            || $value === null;

        if (!$canCast) {
            throw new Error(
                'String cannot represent value: ' . Utils::printSafe($value)
            );
        }

        return (string)$value;
    }

    /**
     * @param mixed $value
     *
     * @return string
     *
     * @throws Error
     */
    public function parseValue(mixed $value): string
    {
        if (!is_string($value)) {
            throw new Error(
                'String cannot represent a non string value: ' . Utils::printSafe($value)
            );
        }

        return $value;
    }

    /**
     * @param array|null $variables
     *
     * @return string
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null): string
    {
        if ($valueNode instanceof StringValueNode) {
            return $valueNode->value;
        }

        // Intentionally without message, as all information already in wrapped Exception
        throw new Error();
    }
}
