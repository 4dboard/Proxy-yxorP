<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\processors;

use yxorP\app\lib\openapi\analysis;
use yxorP\app\lib\openapi\annotations\JsonContent;
use yxorP\app\lib\openapi\annotations\MediaType;
use yxorP\app\lib\openapi\annotations\Parameter;
use yxorP\app\lib\openapi\annotations\RequestBody;
use yxorP\app\lib\openapi\annotations\Response;
use yxorP\app\lib\openapi\Context;
use yxorP\app\lib\openapi\Generator;

/**
 * Split JsonContent into Schema and MediaType.
 */
class MergeJsonContent
{
    public function __invoke(Analysis $analysis)
    {
        /** @var JsonContent[] $annotations */
        $annotations = $analysis->getAnnotationsOfType(JsonContent::class);

        foreach ($annotations as $jsonContent) {
            $parent = $jsonContent->_context->nested;
            if (!($parent instanceof Response) && !($parent instanceof RequestBody) && !($parent instanceof Parameter)) {
                if ($parent) {
                    $jsonContent->_context->logger->warning('Unexpected ' . $jsonContent->identity() . ' in ' . $parent->identity() . ' in ' . $parent->_context);
                } else {
                    $jsonContent->_context->logger->warning('Unexpected ' . $jsonContent->identity() . ' must be nested');
                }
                continue;
            }
            if ($parent->content === Generator::UNDEFINED) {
                $parent->content = [];
            }
            $parent->content['application/json'] = new MediaType([
                'schema' => $jsonContent,
                'example' => $jsonContent->example,
                'examples' => $jsonContent->examples,
                '_context' => new Context(['generated' => true], $jsonContent->_context),
            ]);
            if (!$parent instanceof Parameter) {
                $parent->content['application/json']->mediaType = 'application/json';
            }
            $jsonContent->example = Generator::UNDEFINED;
            $jsonContent->examples = Generator::UNDEFINED;

            $index = array_search($jsonContent, $parent->_unmerged, true);
            if ($index !== false) {
                array_splice($parent->_unmerged, $index, 1);
            }
        }
    }
}
