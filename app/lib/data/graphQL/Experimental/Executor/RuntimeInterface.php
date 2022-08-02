<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Experimental\Executor;

use yxorP\app\lib\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\graphQL\Type\Definition\InputType;
use yxorP\app\lib\graphQL\Type\Definition\ListOfType;
use yxorP\app\lib\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\graphQL\Type\Definition\ScalarType;

/**
 * @internal
 */
interface RuntimeInterface
{
    /**
     * @param ScalarType|EnumType|InputObjectType|ListOfType|NonNull $type
     */
    public function evaluate(ValueNodeInterface $valueNode, InputType $type);

    public function addError($error);
}
