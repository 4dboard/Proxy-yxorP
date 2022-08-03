<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Experimental\Executor;

use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Type\Definition\InputType;

/**
 * @internal
 */
interface RuntimeInterface
{
    /**
     * @param \yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface $valueNode
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\InputType $type
     */
    public function evaluate(ValueNodeInterface $valueNode, InputType $type);

    public function addError($error);
}
