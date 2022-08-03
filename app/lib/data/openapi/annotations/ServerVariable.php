<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A Server Variable Object https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#server-variable-object
 * An object representing a Server Variable for server URL template substitution.
 */
class ServerVariable extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Server::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_required = ['default'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'default' => 'string',
        'description' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * The key into Server->variables array.
     *
     * @var string
     */
    public string $serverVariable = Generator::UNDEFINED;
    /**
     * An enumeration of string values to be used if the substitution options are from a limited set.
     *
     * @var string[]
     */
    public string|array $enum = Generator::UNDEFINED;
    /**
     * The default value to use for substitution, and to send, if an alternate value is not supplied.
     * Unlike the Schema Object's default, this value must be provided by the consumer.
     *
     * @var string
     */
    public string $default = Generator::UNDEFINED;
    /**
     * A map between a variable name and its value.
     * The value is used for substitution in the server's URL template.
     *
     * @var string|array
     */
    public string|array $variables = Generator::UNDEFINED;
    /**
     * An optional description for the server variable.
     * CommonMark syntax MAY be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
}
