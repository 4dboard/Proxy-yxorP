<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * Shorthand for a json response.
 *
 * Use as an Schema inside a Response and the MediaType "application/json" will be generated.
 */
class JsonContent extends Schema
{

    /**
     * @inheritdoc
     */
    public static array $_parents = [];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Discriminator::class => 'discriminator',
        Items::class => 'items',
        Property::class => ['properties', 'property'],
        ExternalDocumentation::class => 'externalDocs',
        AdditionalProperties::class => 'additionalProperties',
        Examples::class => ['examples', 'example'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @var object
     */
    public string $example = Generator::UNDEFINED;
    /**
     * @var object
     */
    public string|object $examples = Generator::UNDEFINED;
}
