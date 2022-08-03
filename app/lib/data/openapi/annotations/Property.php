<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 */
class Property extends Schema
{
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        AdditionalProperties::class,
        Schema::class,
        JsonContent::class,
        XmlContent::class,
        Property::class,
        Items::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Discriminator::class => 'discriminator',
        Items::class => 'items',
        Property::class => ['properties', 'property'],
        ExternalDocumentation::class => 'externalDocs',
        Xml::class => 'xml',
        AdditionalProperties::class => 'additionalProperties',
        Attachable::class => ['attachables'],
    ];
    /**
     * The key into Schema->properties array.
     *
     * @var AbstractAnnotation
     */
    public AbstractAnnotation $property = Generator::UNDEFINED;
    /**
     * Indicates the property is nullable.
     *
     * @var bool
     */
    public string|bool $nullable = Generator::UNDEFINED;
}
