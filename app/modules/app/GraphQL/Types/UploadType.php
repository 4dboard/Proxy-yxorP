<?php

namespace yxorP\app\modules\app\graphQL\types;

use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\psr\http\message\uploadedFileInterface;
use yxorP\app\modules\app\graphQL\Error\Error;
use yxorP\app\modules\app\graphQL\Error\InvariantViolation;
use yxorP\app\modules\app\graphQL\Language\AST\Node;
use yxorP\app\modules\app\graphQL\Type\Definition\ScalarType;

class uploadType extends ScalarType
{
    /**
     * @var string
     */
    public string $name = 'Upload';

    /**
     * @var string
     */
    public string $description =
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
    public function serialize(mixed $value): mixed
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
    public function parseValue(mixed $value): uploadedFileInterface
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
    public function parseLiteral(Node $valueNode, array $variables = null): mixed
    {
        throw new Error('`Upload` cannot be hardcoded in query, be sure to conform to GraphQL multipart request specification. Instead got: ' . $valueNode->kind, $valueNode);
    }
}
