<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * A "Path Item Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#path-item-object
 * Describes the operations available on a single path.
 * A Path Item may be empty, due to ACL constraints.
 * The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.
 */
class PathItem extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'path' => 'string',
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Get::class => 'get',
        Post::class => 'post',
        Put::class => 'put',
        Delete::class => 'delete',
        Patch::class => 'patch',
        Trace::class => 'trace',
        Head::class => 'head',
        Options::class => 'options',
        Parameter::class => ['parameters'],
        Server::class => ['servers'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        OpenApi::class,
    ];
    /**
     * $ref See https://swagger.io/docs/specification/using-ref/.
     *
     * @var string
     */
    public string $ref = Generator::UNDEFINED;
    /**
     * key for the Path Object (OpenApi->paths array).
     *
     * @var string
     */
    public string $path = Generator::UNDEFINED;
    /**
     * An optional, string summary, intended to apply to all operations in this path.
     *
     * @var string
     */
    public string $summary = Generator::UNDEFINED;
    /**
     * A definition of a GET operation on this path.
     *
     * @var string|Get
     */
    public string|Get $get = Generator::UNDEFINED;
    /**
     * A definition of a PUT operation on this path.
     *
     * @var string|Put
     */
    public string|Put $put = Generator::UNDEFINED;
    /**
     * A definition of a POST operation on this path.
     *
     * @var string|Post
     */
    public string|Post $post = Generator::UNDEFINED;
    /**
     * A definition of a DELETE operation on this path.
     *
     * @var string|Delete
     */
    public string|Delete $delete = Generator::UNDEFINED;
    /**
     * A definition of a OPTIONS operation on this path.
     *
     * @var string|Options
     */
    public string|Options $options = Generator::UNDEFINED;
    /**
     * A definition of a HEAD operation on this path.
     *
     * @var string|Head
     */
    public string|Head $head = Generator::UNDEFINED;
    /**
     * A definition of a PATCH operation on this path.
     *
     * @var string|Patch
     */
    public string|Patch $patch = Generator::UNDEFINED;
    /**
     * A definition of a TRACE operation on this path.
     *
     * @var string|Trace
     */
    public string|Trace $trace = Generator::UNDEFINED;
    /**
     * An alternative server array to service all operations in this path.
     *
     * @var Server[]
     */
    public string|array $servers = Generator::UNDEFINED;
    /**
     * A list of parameters that are applicable for all the operations described under this path.
     * These parameters can be overridden at the operation level, but cannot be removed there.
     * The list must not include duplicated parameters.
     * A unique parameter is defined by a combination of a name and location.
     * The list can use the Reference Object to link to parameters that are defined at the OpenAPI Object's components/parameters.
     *
     * @var Parameter[]
     */
    public string|array $parameters = Generator::UNDEFINED;
}
