<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\Components;
use yxorP\app\lib\openapi\Context;
use yxorP\app\lib\openapi\Generator;

/**
 * Merge reusable annotation into @OA\Schemas.
 */
class MergeIntoComponents
{
    public function __invoke(Analysis $analysis)
    {
        $components = $analysis->openapi->components;
        if ($components === Generator::UNDEFINED) {
            $context = new Context([], $analysis->context);
            $components = new Components(['_context' => $context]);
            $components->_context->generated = true;
        }

        foreach ($analysis->annotations as $annotation) {
            if (Components::matchNested(get_class($annotation)) && $annotation->_context->is('nested') === false) {
                // A top level annotation.
                $components->merge([$annotation], true);
                $analysis->openapi->components = $components;
            }
        }
    }
}
