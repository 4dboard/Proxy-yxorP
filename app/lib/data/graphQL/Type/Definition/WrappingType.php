<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

interface WrappingType
{
    public function getWrappedType(bool $recurse = false): Type;
}
