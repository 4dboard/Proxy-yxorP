<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * The discriminator is a specific object in a schema which is used to inform the consumer of
 * the specification of an alternative schema based on the value associated with it.
 * This object is based on the [JSON Schema Specification](http://json-schema.org) and uses a predefined subset of it.
 * On top of this subset, there are extensions provided by this specification to allow for more complete documentation.
 *
 * A "Discriminator Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#discriminatorObject
 * JSON Schema: http://json-schema.org/
 */
class Discriminator extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['propertyName'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'propertyName' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Schema::class,
        Property::class,
        AdditionalProperties::class,
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
     * The name of the property in the payload that will hold the discriminator value.
     *
     * @var string
     */
    public string $propertyName = Generator::UNDEFINED;
    /**
     * An object to hold mappings between payload values and schema names or references.
     *
     * @var string[]
     */
    public string|array $mapping = Generator::UNDEFINED;
}
