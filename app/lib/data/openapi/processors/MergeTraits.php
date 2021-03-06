<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use Traversable;
use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\Property;
use yxorP\app\lib\openapi\annotations\schema;

/**
 * @deprecated
 */
class MergeTraits
{
    public function __invoke(Analysis $analysis)
    {
        /** @var Schema[] $schemas */
        $schemas = $analysis->getAnnotationsOfType(Schema::class);

        foreach ($schemas as $schema) {
            if ($schema->_context->is('class')) {
                $existing = [];
                $traits = $analysis->getTraitsOfClass($schema->_context->fullyQualifiedName($schema->_context->class));
                foreach ($traits as $trait) {
                    if (is_iterable($trait['context']->annotations)) {
                        foreach ($trait['context']->annotations as $annotation) {
                            if ($annotation instanceof Property && !in_array($annotation->_context->property, $existing)) {
                                $existing[] = $annotation->_context->property;
                                $schema->merge([$annotation], true);
                            }
                        }
                    }

                    foreach ($trait['properties'] as $method) {
                        if (is_array($method->annotations) || $method->annotations instanceof Traversable) {
                            foreach ($method->annotations as $annotation) {
                                if ($annotation instanceof Property && !in_array($annotation->_context->property, $existing)) {
                                    $existing[] = $annotation->_context->property;
                                    $schema->merge([$annotation], true);
                                }
                            }
                        }
                    }

                    foreach ($trait['methods'] as $method) {
                        if (is_array($method->annotations) || $method->annotations instanceof Traversable) {
                            foreach ($method->annotations as $annotation) {
                                if ($annotation instanceof Property && !in_array($annotation->_context->property, $existing)) {
                                    $existing[] = $annotation->_context->property;
                                    $schema->merge([$annotation], true);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
