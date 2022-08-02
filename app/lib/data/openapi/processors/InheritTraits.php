<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\Components;
use yxorP\app\lib\openapi\annotations\schema;
use yxorP\app\lib\openapi\Generator;
use yxorP\app\lib\openapi\Util;

/**
 * @deprecated
 */
class InheritTraits
{
    public function __invoke(Analysis $analysis)
    {
        /** @var Schema[] $schemas */
        $schemas = $analysis->getAnnotationsOfType(Schema::class);

        foreach ($schemas as $schema) {
            if ($schema->_context->is('class') || $schema->_context->is('trait')) {
                $source = $schema->_context->class ?: $schema->_context->trait;
                $traits = $analysis->getTraitsOfClass($schema->_context->fullyQualifiedName($source), true);
                foreach ($traits as $trait) {
                    $traitSchema = $analysis->getSchemaForSource($trait['context']->fullyQualifiedName($trait['trait']));
                    if ($traitSchema) {
                        $refPath = $traitSchema->schema !== Generator::UNDEFINED ? $traitSchema->schema : $trait['trait'];
                        if ($schema->allOf === Generator::UNDEFINED) {
                            $schema->allOf = [];
                        }
                        $schema->allOf[] = new Schema([
                            '_context' => $trait['context']->_context,
                            'ref' => Components::SCHEMA_REF . Util::refEncode($refPath),
                        ]);
                    }
                }
            }
        }
    }
}
