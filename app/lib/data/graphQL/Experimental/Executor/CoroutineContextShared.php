<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Experimental\Executor;

use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\ResolveInfo;

/**
 * @internal
 */
class CoroutineContextShared
{
    /** @var FieldNode[] */
    public $fieldNodes;

    /** @var string */
    public $fieldName;

    /** @var string */
    public $resultName;

    /** @var ValueNodeInterface[]|null */
    public $argumentValueMap;

    /** @var SelectionSetNode|null */
    public $mergedSelectionSet;

    /** @var ObjectType|null */
    public $typeGuard1;

    /** @var callable|null */
    public $resolveIfType1;

    /** @var mixed */
    public $argumentsIfType1;

    /** @var ResolveInfo|null */
    public $resolveInfoIfType1;

    /** @var ObjectType|null */
    public $typeGuard2;

    /** @var CoroutineContext[]|null */
    public $childContextsIfType2;

    /**
     * @param FieldNode[] $fieldNodes
     * @param mixed[]|null $argumentValueMap
     */
    public function __construct(array $fieldNodes, string $fieldName, string $resultName, ?array $argumentValueMap)
    {
        $this->fieldNodes = $fieldNodes;
        $this->fieldName = $fieldName;
        $this->resultName = $resultName;
        $this->argumentValueMap = $argumentValueMap;
    }
}