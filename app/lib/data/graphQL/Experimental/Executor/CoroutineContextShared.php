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
    public array $fieldNodes;

    /** @var string */
    public string $fieldName;

    /** @var string */
    public string $resultName;

    /** @var ValueNodeInterface[]|null */
    public ?array $argumentValueMap;

    /** @var SelectionSetNode|null */
    public ?SelectionSetNode $mergedSelectionSet;

    /** @var ObjectType|null */
    public ?ObjectType $typeGuard1;

    /** @var callable|null */
    public $resolveIfType1;

    /** @var mixed */
    public mixed $argumentsIfType1;

    /** @var ResolveInfo|null */
    public ?ResolveInfo $resolveInfoIfType1;

    /** @var ObjectType|null */
    public ?ObjectType $typeGuard2;

    /** @var CoroutineContext[]|null */
    public ?array $childContextsIfType2;

    /**
     * @param FieldNode[] $fieldNodes
     * @param string $fieldName
     * @param string $resultName
     * @param array|null $argumentValueMap
     */
    public function __construct(array $fieldNodes, string $fieldName, string $resultName, ?array $argumentValueMap)
    {
        $this->fieldNodes = $fieldNodes;
        $this->fieldName = $fieldName;
        $this->resultName = $resultName;
        $this->argumentValueMap = $argumentValueMap;
    }
}
