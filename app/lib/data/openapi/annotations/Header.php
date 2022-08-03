<?php declare(strict_types=1);
/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 *
 * A "Header Object" https://github.com/OAI/OpenAPI-Specification/blob/OpenAPI.next/versions/3.0.md#headerObject
 */
class Header extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['header', 'schema'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'header' => 'string',
        'description' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Schema::class => 'schema',
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Components::class,
        Response::class,
    ];
    /**
     * $ref See https://swagger.io/docs/specification/using-ref/.
     *
     * @var string
     */
    public string $ref = Generator::UNDEFINED;
    /**
     * @var string
     */
    public string $header = Generator::UNDEFINED;
    /**
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * A brief description of the parameter. This could contain examples of use. CommonMark syntax MAY be used for rich text representation.
     *
     * @var bool
     */
    public string|bool $required = Generator::UNDEFINED;
    /**
     * Schema object.
     *
     * @var string|Schema
     */
    public Schema|string $schema = Generator::UNDEFINED;
    /**
     * Specifies that a parameter is deprecated and SHOULD be transitioned out of usage.
     *
     * @var bool
     */
    public string|bool $deprecated = Generator::UNDEFINED;
    /**
     * Sets the ability to pass empty-valued parameters.
     * This is valid only for query parameters and allows sending a parameter with an empty value.
     * Default value is false. If style is used, and if behavior is n/a
     * (cannot be serialized), the value of allowEmptyValue SHALL be ignored.
     *
     * @var bool
     */
    public string|bool $allowEmptyValue = Generator::UNDEFINED;
}
