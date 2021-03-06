<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

/**
 * @Annotation
 */
class AdditionalProperties extends Schema
{
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Schema::class,
        Property::class,
        Items::class,
        JsonContent::class,
        XmlContent::class,
        AdditionalProperties::class,
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
}
