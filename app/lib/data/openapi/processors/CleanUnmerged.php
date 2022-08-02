<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\abstractAnnotation;

class CleanUnmerged
{
    public function __invoke(Analysis $analysis)
    {
        $split = $analysis->split();
        $merged = $split->merged->annotations;
        $unmerged = $split->unmerged->annotations;

        /** @var AbstractAnnotation $annotation */
        foreach ($analysis->annotations as $annotation) {
            if (property_exists($annotation, '_unmerged')) {
                foreach ($annotation->_unmerged as $i => $item) {
                    if ($merged->contains($item)) {
                        unset($annotation->_unmerged[$i]); // Property was merged
                    }
                }
            }
        }
        $analysis->openapi->_unmerged = [];
        foreach ($unmerged as $annotation) {
            $analysis->openapi->_unmerged[] = $annotation;
        }
    }
}
