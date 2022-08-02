<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * Shorthand for a xml response.
 *
 * Use as an Schema inside a Response and the MediaType "application/xml" will be generated.
 */
class XmlContent extends Schema
{
    /**
     * @inheritdoc
     */
    public static $_parents = [];
    /**
     * @inheritdoc
     */
    public static $_nested = [
        Discriminator::class => 'discriminator',
        Items::class => 'items',
        Property::class => ['properties', 'property'],
        ExternalDocumentation::class => 'externalDocs',
        Xml::class => 'xml',
        AdditionalProperties::class => 'additionalProperties',
        Examples::class => ['examples', 'example'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @var object
     */
    public $examples = Generator::UNDEFINED;
}
