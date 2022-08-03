<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\Components;
use yxorP\app\lib\openapi\annotations\Items;
use yxorP\app\lib\openapi\annotations\Property;
use yxorP\app\lib\openapi\annotations\schema;
use yxorP\app\lib\openapi\Context;
use yxorP\app\lib\openapi\Generator;
use yxorP\app\lib\openapi\Util;

/**
 * Use the property context to extract useful information and inject that into the annotation.
 */
class AugmentProperties
{
    public static $types = [
        'array' => 'array',
        'byte' => ['string', 'byte'],
        'boolean' => 'boolean',
        'bool' => 'boolean',
        'int' => 'integer',
        'integer' => 'integer',
        'long' => ['integer', 'long'],
        'float' => ['number', 'float'],
        'double' => ['number', 'double'],
        'string' => 'string',
        'date' => ['string', 'date'],
        'datetime' => ['string', 'date-time'],
        '\\datetime' => ['string', 'date-time'],
        'datetimeimmutable' => ['string', 'date-time'],
        '\\datetimeimmutable' => ['string', 'date-time'],
        'datetimeinterface' => ['string', 'date-time'],
        '\\datetimeinterface' => ['string', 'date-time'],
        'number' => 'number',
        'object' => 'object',
    ];

    public function __invoke(Analysis $analysis)
    {
        $refs = [];
        if ($analysis->openapi->components !== Generator::UNDEFINED && $analysis->openapi->components->schemas !== Generator::UNDEFINED) {
            foreach ($analysis->openapi->components->schemas as $schema) {
                if ($schema->schema !== Generator::UNDEFINED) {
                    $refs[strtolower($schema->_context->fullyQualifiedName($schema->_context->class))]
                        = Components::SCHEMA_REF . Util::refEncode($schema->schema);
                }
            }
        }

        /** @var Property[] $properties */
        $properties = $analysis->getAnnotationsOfType(Property::class);

        foreach ($properties as $property) {
            $context = $property->_context;
            // Use the property names for @OA\Property()
            if ($property->property === Generator::UNDEFINED) {
                $property->property = $context->property;
            }
            if ($property->ref !== Generator::UNDEFINED) {
                continue;
            }
            $comment = str_replace("\r\n", "\n", (string)$context->comment);
            if ($property->type === Generator::UNDEFINED && $context->type && $context->type !== Generator::UNDEFINED) {
                if ($context->nullable === true) {
                    $property->nullable = true;
                }
                $type = strtolower((string)$context->type);
                if (isset(self::$types[$type])) {
                    $this->applyType($property, static::$types[$type]);
                } else {
                    $key = strtolower($context->fullyQualifiedName($type));
                    if ($property->ref === Generator::UNDEFINED && array_key_exists($key, $refs)) {
                        $this->applyRef($property, $refs[$key]);
                        continue;
                    }
                }
            } elseif (preg_match('/@var\s+(?<type>[^\s]+)([ \t])?(?<description>.+)?$/im', $comment, $varMatches)) {
                if ($property->type === Generator::UNDEFINED) {
                    $allTypes = trim($varMatches['type']);
                    $isNullable = $this->isNullable($allTypes);
                    $allTypes = $this->stripNull($allTypes);
                    preg_match('/^([^\[]+)(.*$)/', trim($allTypes), $typeMatches);
                    $type = $typeMatches[1];

                    if (array_key_exists(strtolower($type), static::$types) === false) {
                        $key = strtolower($context->fullyQualifiedName($type));
                        if ($property->ref === Generator::UNDEFINED && $typeMatches[2] === '' && array_key_exists($key, $refs)) {
                            if ($isNullable) {
                                $property->oneOf = [
                                    new Schema([
                                        '_context' => $property->_context,
                                        'ref' => $refs[$key],
                                    ]),
                                ];
                                $property->nullable = true;
                            } else {
                                $property->ref = $refs[$key];
                            }
                            continue;
                        }
                    } else {
                        $type = static::$types[strtolower($type)];
                        if (is_array($type)) {
                            if ($property->format === Generator::UNDEFINED) {
                                $property->format = $type[1];
                            }
                            $type = $type[0];
                        }
                        $property->type = $type;
                    }
                    if ($typeMatches[2] === '[]') {
                        if ($property->items === Generator::UNDEFINED) {
                            $property->items = new Items(
                                [
                                    'type' => $property->type,
                                    '_context' => new Context(['generated' => true], $context),
                                ]
                            );
                            if ($property->items->type === Generator::UNDEFINED) {
                                $key = strtolower($context->fullyQualifiedName($type));
                                $property->items->ref = array_key_exists($key, $refs) ? $refs[$key] : null;
                            }
                        }
                        $property->type = 'array';
                    }
                    if ($isNullable && $property->nullable === Generator::UNDEFINED) {
                        $property->nullable = true;
                    }
                }
                if ($property->description === Generator::UNDEFINED && isset($varMatches['description'])) {
                    $property->description = trim($varMatches['description']);
                }
            }

            if ($property->example === Generator::UNDEFINED && preg_match('/@example\s+([ \t])?(?<example>.+)?$/im', $comment, $varMatches)) {
                $property->example = $varMatches['example'];
            }

            if ($property->description === Generator::UNDEFINED && $property->isRoot()) {
                $property->description = $context->phpdocContent();
            }
        }
    }

    protected function applyType(Property $property, $type): void
    {
        if (is_array($type)) {
            if ($property->format === Generator::UNDEFINED) {
                $property->format = $type[1];
            }
            $type = $type[0];
        }

        $property->type = $type;
    }

    protected function applyRef(Property $property, string $ref): void
    {
        if ($property->nullable === true) {
            $property->oneOf = [
                new Schema([
                    '_context' => $property->_context,
                    'ref' => $ref,
                ]),
            ];
        } else {
            $property->ref = $ref;
        }
    }

    protected function isNullable(string $typeDescription): bool
    {
        return in_array('null', explode('|', strtolower($typeDescription)));
    }

    protected function stripNull(string $typeDescription): string
    {
        if (!str_contains($typeDescription, '|')) {
            return $typeDescription;
        }
        $types = [];
        foreach (explode('|', $typeDescription) as $type) {
            if (strtolower($type) === 'null') {
                continue;
            }
            $types[] = $type;
        }

        return implode('|', $types);
    }
}
