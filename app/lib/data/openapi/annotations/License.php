<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * License information for the exposed API.
 *
 * A "License Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#license-object
 */
class License extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'name' => 'string',
        'url' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_required = ['name'];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Info::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * The license name used for the API.
     *
     * @var string
     */
    public string $name = Generator::UNDEFINED;
    /**
     * A URL to the license used for the API.
     *
     * @var string
     */
    public string $url = Generator::UNDEFINED;
}
