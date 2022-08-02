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
    public static $_types = [
        'name' => 'string',
        'url' => 'string',
        'email' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static $_parents = [
        Info::class,
    ];
    /**
     * @inheritdoc
     */
    public static $_nested = [
        Attachable::class => ['attachables'],
    ];
    /**
     * The identifying name of the contact person/organization.
     *
     * @var string
     */
    public $name = Generator::UNDEFINED;
    /**
     * The URL pointing to the contact information.
     *
     * @var string
     */
    public $url = Generator::UNDEFINED;
    /**
     * The email address of the contact person/organization.
     *
     * @var string
     */
    public $email = Generator::UNDEFINED;
}
