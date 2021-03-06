<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use Traversable;
use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\Components;
use yxorP\app\lib\openapi\annotations\Property;
use yxorP\app\lib\openapi\annotations\schema;
use yxorP\app\lib\openapi\Context;
use yxorP\app\lib\openapi\Generator;
use yxorP\app\lib\openapi\Util;

/**
 * Copy the annotated properties from parent classes;.
 *
 * @deprecated
 */
class InheritProperties
{
    public function __invoke(Analysis $analysis)
    {
        /* @var $schemas Schema[] */
        $schemas = $analysis->getAnnotationsOfType(Schema::class, true);
        $processed = [];

        foreach ($schemas as $schema) {
            if ($schema->_context->is('class')) {
                if (in_array($schema->_context, $processed, true)) {
                    // we should process only first schema in the same context
                    continue;
                }

                $processed[] = $schema->_context;

                $existing = [];
                if (is_array($schema->properties) || $schema->properties instanceof Traversable) {
                    foreach ($schema->properties as $property) {
                        $existing[] = $property->property;
                    }
                }
                $classes = $analysis->getSuperClasses($schema->_context->fullyQualifiedName($schema->_context->class));
                foreach ($classes as $class) {
                    if ($class['context']->annotations) {
                        foreach ($class['context']->annotations as $annotation) {
                            if ($annotation instanceof Schema && $annotation->schema !== Generator::UNDEFINED) {
                                $this->inherit($schema, $annotation);

                                continue 2;
                            }
                        }
                    }

                    foreach ($class['properties'] as $property) {
                        if (is_array($property->annotations) === false && !($property->annotations instanceof Traversable)) {
                            continue;
                        }
                        foreach ($property->annotations as $annotation) {
                            if ($annotation instanceof Property && in_array($annotation->property, $existing) === false) {
                                $existing[] = $annotation->property;
                                $schema->merge([$annotation], true);
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * Add schema to child schema allOf property.
     */
    private function inherit(Schema $to, Schema $from): void
    {
        if ($to->allOf === Generator::UNDEFINED) {
            // Move all properties into an `allOf` entry except the `schema` property.
            $clone = new Schema(['_context' => new Context(['generated' => true], $to->_context)]);
            $clone->mergeProperties($to);
            $hasProperties = false;
            $defaultValues = get_class_vars(Schema::class);
            foreach (array_keys(get_object_vars($clone)) as $property) {
                if (in_array($property, ['schema', 'title', 'description'])) {
                    $clone->$property = Generator::UNDEFINED;
                    continue;
                }
                if ($to->$property !== $defaultValues[$property]) {
                    $hasProperties = true;
                }
                $to->$property = $defaultValues[$property];
            }
            $to->allOf = [];
            if ($hasProperties) {
                $to->allOf[] = $clone;
            }
        }
        $append = true;
        foreach ($to->allOf as $entry) {
            if ($entry->ref !== Generator::UNDEFINED && $entry->ref === Components::SCHEMA_REF . Util::refEncode($from->schema)) {
                $append = false; // ref was already specified manually
            }
        }
        if ($append) {
            array_unshift($to->allOf, new Schema([
                'ref' => Components::SCHEMA_REF . Util::refEncode($from->schema),
                '_context' => new Context(['generated' => true], $from->_context),
            ]));
        }
    }
}
