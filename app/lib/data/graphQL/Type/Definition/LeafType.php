<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Type\Definition;

use Exception;
use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\graphQL\Language\AST\Node;
use yxorP\app\lib\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\graphQL\Language\AST\StringValueNode;

/*
export type GraphQLLeafType =
GraphQLScalarType |
GraphQLEnumType;
*/

interface LeafType
{
    /**
     * Serializes an internal value to include in a response.
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function serialize($value);

    /**
     * Parses an externally provided value (query variable) to use as an input
     *
     * In the case of an invalid value this method must throw an Exception
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function parseValue($value);

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input
     *
     * In the case of an invalid node or value this method must throw an Exception
     *
     * @param IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|NullValueNode $valueNode
     * @param mixed[]|null $variables
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null);
}
