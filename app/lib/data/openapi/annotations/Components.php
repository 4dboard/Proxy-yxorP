<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A Components Object: https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#components-object
 *
 * Holds a set of reusable objects for different aspects of the OA.
 * All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.
 */
class Components extends AbstractAnnotation
{
    /**
     * Schema reference.
     *
     * @var string
     */
    const SCHEMA_REF = '#/components/schemas/';
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        OpenApi::class,
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Schema::class => ['schemas', 'schema'],
        Response::class => ['responses', 'response'],
        Parameter::class => ['parameters', 'parameter'],
        RequestBody::class => ['requestBodies', 'request'],
        Examples::class => ['examples', 'example'],
        Header::class => ['headers', 'header'],
        SecurityScheme::class => ['securitySchemes', 'securityScheme'],
        Link::class => ['links', 'link'],
        Attachable::class => ['attachables'],
    ];
    /**
     * Reusable Schemas.
     *
     * @var Schema[]
     */
    public string|array $schemas = Generator::UNDEFINED;
    /**
     * Reusable Responses.
     *
     * @var Response[]
     */
    public string|array $responses = Generator::UNDEFINED;
    /**
     * Reusable Parameters.
     *
     * @var Parameter[]
     */
    public string|array $parameters = Generator::UNDEFINED;
    /**
     * Reusable Examples.
     *
     * @var Examples[]
     */
    public string|array $examples = Generator::UNDEFINED;
    /**
     * Reusable Request Bodys.
     *
     * @var RequestBody[]
     */
    public string|array $requestBodies = Generator::UNDEFINED;
    /**
     * Reusable Headers.
     *
     * @var Header[]
     */
    public string|array $headers = Generator::UNDEFINED;
    /**
     * Reusable Security Schemes.
     *
     * @var SecurityScheme[]
     */
    public string|array $securitySchemes = Generator::UNDEFINED;
    /**
     * Reusable Links.
     *
     * @var Link[]
     */
    public string|array $links = Generator::UNDEFINED;
    /**
     * Reusable Callbacks.
     *
     * @var callable[]
     */
    public string|array $callbacks = Generator::UNDEFINED;
}
