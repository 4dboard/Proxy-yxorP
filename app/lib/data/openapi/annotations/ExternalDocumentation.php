<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * Allows referencing an external resource for extended documentation.
 *
 * A "External Documentation Object": https://github.com/OAI/OpenAPI-Specification/blob/OpenAPI.next/versions/3.0.md#external-documentation-object
 */
class ExternalDocumentation extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'description' => 'string',
        'url' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_required = ['url'];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        OpenApi::class,
        Tag::class,
        Schema::class,
        AdditionalProperties::class,
        Property::class,
        Operation::class,
        Get::class,
        Post::class,
        Put::class,
        Delete::class,
        Patch::class,
        Head::class,
        Options::class,
        Trace::class,
        Items::class,
        JsonContent::class,
        XmlContent::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * A short description of the target documentation. GFM syntax can be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * The URL for the target documentation.
     *
     * @var string
     */
    public string $url = Generator::UNDEFINED;
}
