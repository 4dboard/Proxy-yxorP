<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A "Contact Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#contact-object
 *
 * Contact information for the exposed API.
 */
class Contact extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'name' => 'string',
        'url' => 'string',
        'email' => 'string',
    ];
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
     * The identifying name of the contact person/organization.
     *
     * @var string
     */
    public string $name = Generator::UNDEFINED;
    /**
     * The URL pointing to the contact information.
     *
     * @var string
     */
    public string $url = Generator::UNDEFINED;
    /**
     * The email address of the contact person/organization.
     *
     * @var string
     */
    public string $email = Generator::UNDEFINED;
}
