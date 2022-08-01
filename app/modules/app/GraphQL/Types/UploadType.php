<?php

namespace App\graphQL\Types;

use graphQL\Error\Error;
use graphQL\Error\InvariantViolation;
use graphQL\Language\AST\Node;
use graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\psr\http\message\uploadedFileInterface;

class uploadType extends ScalarType
{
    /**
     * @var string
     */
    public $name = 'Upload';

    /**
     * @var string
     */
    public $description =
        'The `Upload` special type represents a file to be uploaded in the same HTTP request as specified by
 [graphql-multipart-request-spec](https://github.com/jaydenseric/graphql-multipart-request-spec).';

    public static function instance()
    {
        static $instance;

        if (is_null($instance)) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Serializes an internal value to include in a response.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function serialize($value)
    {
        throw new InvariantViolation('`Upload` cannot be serialized');
    }

    /**
     * Parses an externally provided value (query variable) to use as an input
     *
     * @param mixed $value
     *
     * @return UploadedFileInterface
     */
    public function parseValue($value)
    {
        // if (!$value instanceof UploadedFileInterface) {
        //     throw new \UnexpectedValueException('Could not get uploaded file, be sure to conform to GraphQL multipart request specification. Instead got: ' . Utils::printSafe($value));
        // }

        return $value;
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input
     *
     * @param Node $valueNode
     * @param null|array $variables
     *
     * @return mixed
     */
    public function parseLiteral($valueNode, array $variables = null)
    {
        throw new Error('`Upload` cannot be hardcoded in query, be sure to conform to GraphQL multipart request specification. Instead got: ' . $valueNode->kind, $valueNode);
    }
}
