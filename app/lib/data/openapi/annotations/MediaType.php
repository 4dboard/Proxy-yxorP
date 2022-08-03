<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A "Media Type Object" https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#media-type-object
 *
 * Each Media Type Object provides schema and examples for the media type identified by its key.
 */
class MediaType extends AbstractAnnotation
{

    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Schema::class => 'schema',
        Examples::class => ['examples', 'example'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Response::class,
        RequestBody::class,
    ];
    /**
     * The key into Operation->content array.
     *
     * @var string
     */
    public string $mediaType = Generator::UNDEFINED;
    /**
     * The schema defining the type used for the request body.
     *
     * @var Schema
     */
    public Schema|string $schema = Generator::UNDEFINED;
    /**
     * Example of the media type.
     * The example object should be in the correct format as specified by the media type.
     * The example object is mutually exclusive of the examples object.
     * Furthermore, if referencing a schema which contains an example, the example value shall override the example provided by the schema.
     */
    public string $example = Generator::UNDEFINED;
    /**
     * Examples of the media type.
     * Each example object should match the media type and specified schema if present.
     * The examples object is mutually exclusive of the example object.
     * Furthermore, if referencing a schema which contains an example, the examples value shall override the example provided by the schema.
     *
     * @var array
     */
    public string|array $examples = Generator::UNDEFINED;
    /**
     * A map between a property name and its encoding information.
     * The key, being the property name, must exist in the schema as a property.
     * The encoding object shall only apply to requestBody objects when the media type is multipart or application/x-www-form-urlencoded.
     */
    public string $encoding = Generator::UNDEFINED;
}
