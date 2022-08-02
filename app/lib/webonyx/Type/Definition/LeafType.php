<?php

declare(strict_types=1);

namespace GraphQL\Type\Definition;

use Exception;
use GraphQL\Error\Error;
use GraphQL\Language\AST\BooleanValueNodeInterface;
use GraphQL\Language\AST\FloatValueNodeInterface;
use GraphQL\Language\AST\IntValueNodeInterface;
use GraphQL\Language\AST\Node;
use GraphQL\Language\AST\NullValueNodeInterface;
use GraphQL\Language\AST\StringValueNodeInterface;

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
     * @param IntValueNodeInterface|FloatValueNodeInterface|StringValueNodeInterface|BooleanValueNodeInterface|NullValueNodeInterface $valueNode
     * @param mixed[]|null $variables
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null);
}
