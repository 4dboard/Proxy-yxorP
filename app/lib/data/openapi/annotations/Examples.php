<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 */
class Examples extends AbstractAnnotation
{
    public static array $_types = [
        'summary' => 'string',
        'description' => 'string',
        'externalValue' => 'string',
    ];
    public static array $_required = ['summary'];
    public static array $_parents = [
        Components::class,
        Parameter::class,
        MediaType::class,
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
     * $ref See https://swagger.io/docs/specification/using-ref/.
     *
     * @var string
     */
    public string $ref = Generator::UNDEFINED;
    /**
     * The key into Components->examples array.
     *
     * @var string
     */
    public string $example = Generator::UNDEFINED;
    /**
     * Short description for the example.
     *
     * @var string
     */
    public string $summary = Generator::UNDEFINED;
    /**
     * Embedded literal example. The value field and externalValue field are
     * mutually exclusive. To represent examples of media types that cannot
     * naturally represented in JSON or YAML, use a string value to contain
     * the example, escaping where necessary.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * Embedded literal example.
     * The value field and externalValue field are mutually exclusive.
     * To represent examples of media types that cannot naturally represented
     * in JSON or YAML, use a string value to contain the example, escaping
     * where necessary.
     *
     * @var string
     */
    public string $value = Generator::UNDEFINED;
    /**
     * A URL that points to the literal example. This provides the
     * capability to reference examples that cannot easily be included
     * in JSON or YAML documents.
     * The value field and externalValue field are mutually exclusive.
     *
     * @var string
     */
    public string $externalValue = Generator::UNDEFINED;
}
