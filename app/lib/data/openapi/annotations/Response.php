<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A "Response Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#response-object
 *
 * Describes a single response from an API Operation, including design-time, static links to operations based on the response.
 */
class Response extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['description'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'description' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        MediaType::class => ['content', 'mediaType'],
        Header::class => ['headers', 'header'],
        Link::class => ['links', 'link'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Components::class,
        Operation::class,
        Get::class,
        Post::class,
        Put::class,
        Patch::class,
        Delete::class,
        Head::class,
        Options::class,
        Trace::class,
    ];
    /**
     * $ref See https://swagger.io/docs/specification/using-ref/.
     *
     * @var string
     */
    public string $ref = Generator::UNDEFINED;
    /**
     * The key into Operations->responses array.
     *
     * @var string a HTTP Status Code or "default"
     */
    public string $response = Generator::UNDEFINED;
    /**
     * A short description of the response.
     * CommonMark syntax may be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * Maps a header name to its definition.
     * RFC7230 states header names are case insensitive. https://tools.ietf.org/html/rfc7230#page-22
     * If a response header is defined with the name "Content-Type", it shall be ignored.
     *
     * @var Header[]
     */
    public string|array $headers = Generator::UNDEFINED;
    /**
     * A map containing descriptions of potential response payloads.
     * The key is a media type or media type range and the value describes it.
     * For responses that match multiple keys, only the most specific key is applicable. e.g. text/plain overrides text/*.
     *
     * @var MediaType[]
     */
    public string|array $content = Generator::UNDEFINED;
    /**
     * A map of operations links that can be followed from the response.
     * The key of the map is a short name for the link, following the naming constraints of the names for Component Objects.
     *
     * @var array
     */
    public string|array $links = Generator::UNDEFINED;
}
