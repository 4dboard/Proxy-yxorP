<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 *
 * A "Tag Object":  https://github.com/OAI/OpenAPI-Specification/blob/OpenAPI.next/versions/3.0.md#tagObject
 */
class Tag extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['name'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'name' => 'string',
        'description' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        OpenApi::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        ExternalDocumentation::class => 'externalDocs',
        Attachable::class => ['attachables'],
    ];
    /**
     * The name of the tag.
     *
     * @var string
     */
    public string $name = Generator::UNDEFINED;
    /**
     * A short description for the tag. GFM syntax can be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * Additional external documentation for this tag.
     *
     * @var string|ExternalDocumentation
     */
    public string|ExternalDocumentation $externalDocs = Generator::UNDEFINED;
}
