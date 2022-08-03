<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 *
 * A "XML Object": https://github.com/OAI/OpenAPI-Specification/blob/OpenAPI.next/versions/3.0.md#xmlObject
 */
class Xml extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'name' => 'string',
        'namespace' => 'string',
        'prefix' => 'string',
        'attribute' => 'boolean',
        'wrapped' => 'boolean',
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        AdditionalProperties::class,
        Schema::class,
        Property::class,
        Schema::class,
        Items::class,
        XmlContent::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * Replaces the name of the element/attribute used for the described schema property. When defined within the Items Object (items), it will affect the name of the individual XML elements within the list. When defined alongside type being array (outside the items), it will affect the wrapping element and only if wrapped is true. If wrapped is false, it will be ignored.
     *
     * @var string
     */
    public string $name = Generator::UNDEFINED;
    /**
     * The URL of the namespace definition. Value SHOULD be in the form of a URL.
     *
     * @var string
     */
    public string $namespace = Generator::UNDEFINED;
    /**
     * The prefix to be used for the name.
     *
     * @var string
     */
    public string $prefix = Generator::UNDEFINED;
    /**
     * Declares whether the property definition translates to an attribute instead of an element. Default value is false.
     *
     * @var bool
     */
    public string|bool $attribute = Generator::UNDEFINED;
    /**
     * MAY be used only for an array definition. Signifies whether the array is wrapped (for example, <books><book/><book/></books>) or unwrapped (<book/><book/>). Default value is false. The definition takes effect only when defined alongside type being array (outside the items).
     *
     * @var bool
     */
    public string|bool $wrapped = Generator::UNDEFINED;
}
