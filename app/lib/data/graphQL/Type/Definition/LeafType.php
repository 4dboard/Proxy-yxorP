<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use Exception;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;

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
    public function serialize(mixed $value): mixed;

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
    public function parseValue(mixed $value): mixed;

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input
     *
     * In the case of an invalid node or value this method must throw an Exception
     *
     * @param \yxorP\app\lib\data\graphQL\Language\AST\Node $valueNode
     * @param array|null $variables
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null): mixed;
}
