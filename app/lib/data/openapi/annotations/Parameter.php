<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\annotations;

use yxorP\app\lib\openapi\Generator;

/**
 * @Annotation
 * [A "Parameter Object": https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#parameter-object
 * Describes a single operation parameter.
 * A unique parameter is defined by a combination of a name and location.
 */
class Parameter extends AbstractAnnotation
{
    /**
     * @inheritdoc
     */
    public static array $_required = ['name', 'in'];
    /**
     * @inheritdoc
     */
    public static array $_types = [
        'name' => 'string',
        'in' => ['query', 'header', 'path', 'cookie'],
        'description' => 'string',
        'style' => ['matrix', 'label', 'form', 'simple', 'spaceDelimited', 'pipeDelimited', 'deepObject'],
        'required' => 'boolean',
    ];
    /**
     * @inheritdoc
     */
    public static array $_nested = [
        Schema::class => 'schema',
        Examples::class => ['examples', 'example'],
        Attachable::class => ['attachables'],
    ];
    /**
     * @inheritdoc
     */
    public static array $_parents = [
        Components::class,
        PathItem::class,
        Operation::class,
        Get::class,
        Post::class,
        Put::class,
        Delete::class,
        Patch::class,
        Head::class,
        Options::class,
        Trace::class,
    ];
    /**
     * $ref See https://swagger.io/docs/specification/using-ref/.
     *
     * @var string
     */
    public string $ref = Generator::UNDEFINED;
    /**
     * The key into Components->parameters or PathItem->parameters array.
     *
     * @var string
     */
    public string $parameter = Generator::UNDEFINED;
    /**
     * The name of the parameter.
     * Parameter names are case sensitive.
     * If in is "path", the name field must correspond to the associated path segment from the path field in the Paths Object.
     * If in is "header" and the name field is "Accept", "Content-Type" or "Authorization", the parameter definition shall be ignored.
     * For all other cases, the name corresponds to the parameter name used by the in property.
     *
     * @var string
     */
    public string $name = Generator::UNDEFINED;
    /**
     * The location of the parameter.
     * Possible values are "query", "header", "path" or "cookie".
     *
     * @var string
     */
    public string $in = Generator::UNDEFINED;
    /**
     * A brief description of the parameter.
     * This could contain examples of use.
     * CommonMark syntax may be used for rich text representation.
     *
     * @var string
     */
    public string $description = Generator::UNDEFINED;
    /**
     * Determines whether this parameter is mandatory.
     * If the parameter location is "path", this property is required and its value must be true.
     * Otherwise, the property may be included and its default value is false.
     *
     * @var bool
     */
    public string|bool $required = Generator::UNDEFINED;
    /**
     * Specifies that a parameter is deprecated and should be transitioned out of usage.
     *
     * @var bool
     */
    public string|bool $deprecated = Generator::UNDEFINED;
    /**
     * Sets the ability to pass empty-valued parameters.
     * This is valid only for query parameters and allows sending a parameter with an empty value.
     * Default value is false. If style is used, and if behavior is n/a (cannot be serialized), the value of allowEmptyValue shall be ignored.
     *
     * @var bool
     */
    public string|bool $allowEmptyValue = Generator::UNDEFINED;
    /**
     * Describes how the parameter value will be serialized depending on the type of the parameter value.
     * Default values (based on value of in): for query - form; for path - simple; for header - simple; for cookie - form.
     *
     * @var string
     */
    public string $style = Generator::UNDEFINED;
    /**
     * When this is true, parameter values of type array or object generate separate parameters for each value of the array or key-value pair of the map.
     * For other types of parameters this property has no effect.
     * When style is form, the default value is true.
     * For all other styles, the default value is false.
     *
     * @var bool
     */
    public string|bool $explode = Generator::UNDEFINED;
    /**
     * Determines whether the parameter value should allow reserved characters, as defined by RFC3986 :/?#[]@!$&'()*+,;= to be included without percent-encoding.
     * This property only applies to parameters with an in value of query.
     * The default value is false.
     *
     * @var bool
     */
    public string|bool $allowReserved = Generator::UNDEFINED;
    /**
     * The schema defining the type used for the parameter.
     *
     * @var Schema
     */
    public Schema|string $schema = Generator::UNDEFINED;
    /**
     * Example of the media type.
     * The example should match the specified schema and encoding properties if present.
     * The example object is mutually exclusive of the examples object.
     * Furthermore, if referencing a schema which contains an example, the example value shall override the example provided by the schema.
     * To represent examples of media types that cannot naturally be represented in JSON or YAML, a string value can contain the example with escaping where necessary.
     */
    public string $example = Generator::UNDEFINED;
    /**
     * Examples of the media type.
     * Each example should contain a value in the correct format as specified in the parameter encoding.
     * The examples object is mutually exclusive of the example object.
     * Furthermore, if referencing a schema which contains an example, the examples value shall override the example provided by the schema.
     *
     * @var array
     */
    public string|array $examples = Generator::UNDEFINED;
    /**
     * A map containing the representations for the parameter.
     * The key is the media type and the value describes it.
     * The map must only contain one entry.
     *
     * @var MediaType[]
     */
    public string|array $content = Generator::UNDEFINED;
    /**
     * Path-style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.7.
     */
    public string $matrix = Generator::UNDEFINED;
    /**
     * Label style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.5.
     */
    public string $label = Generator::UNDEFINED;
    /**
     * Form style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.8
     * This option replaces collectionFormat with a csv (when explode is false) or multi (when explode is true) value from OpenAPI 2.0.
     */
    public string $form = Generator::UNDEFINED;
    /**
     * Simple style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.2
     * This option replaces collectionFormat with a csv value from OpenAPI 2.0.
     *
     * @var array
     */
    public string|array $simple = Generator::UNDEFINED;
    /**
     * Space separated array values.
     * This option replaces collectionFormat equal to ssv from OpenAPI 2.0.
     *
     * @var array
     */
    public string|array $spaceDelimited = Generator::UNDEFINED;
    /**
     * Pipe separated array values.
     * This option replaces collectionFormat equal to pipes from OpenAPI 2.0.
     *
     * @var array
     */
    public string|array $pipeDelimited = Generator::UNDEFINED;
    /**
     * Provides a simple way of rendering nested objects using form parameters.
     */
    public string $deepObject = Generator::UNDEFINED;

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function validate(array $parents = [], array $skip = [], string $ref = ''): bool
    {
        if (in_array($this, $skip, true)) {
            return true;
        }
        $valid = parent::validate($parents, $skip, $ref);
        if ($this->ref === Generator::UNDEFINED) {
            if ($this->in === 'body') {
                if ($this->schema === Generator::UNDEFINED) {
                    $this->_context->logger->warning('Field "schema" is required when ' . $this->identity() . ' is in "' . $this->in . '" in ' . $this->_context);
                    $valid = false;
                }
            }
        }

        return $valid;
    }

    /**
     * @inheritdoc
     */
    public function identity(): string
    {
        return parent::_identity(['name', 'in']);
    }
}
