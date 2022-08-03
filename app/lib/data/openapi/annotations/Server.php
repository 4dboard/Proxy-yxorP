<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A Server Object https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#server-object
 * An object representing a Server.
 */
class Server extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        OpenApi::class,
        PathItem::class,
        Operation::class,
        Get::class,
        Post::class,
        Put::class,
        Delete::class,
        Patch::class,
        Head::class,
        Options::class,
        Trace::class,
        Link::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        ServerVariable::class => ['variables', 'serverVariable'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_required = ['url'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'url' => 'string',
        'description' => 'string',
    ];
    /**
     * A URL to the target host. This URL supports Server Variables and may be relative,
     * to indicate that the host location is relative to the location where the OpenAPI document is being served.
     * Variable substitutions will be made when a variable is named in {brackets}.
     *
     * @var string
     */
    public string $url = Generator::UNDEFINED;
    /**
     * An optional string describing the host designated by the URL.
     * CommonMark syntax may be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * A map between a variable name and its value.
     * The value is used for substitution in the server's URL template.
     *
     * @var array
     */
    public string|array $variables = Generator::UNDEFINED;
}
