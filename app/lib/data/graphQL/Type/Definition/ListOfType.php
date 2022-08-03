<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Type\Schema;
use function is_callable;

abstract class ListOfType extends Type implements WrappingType, OutputType, NullableType, InputType
{
    /** @var callable():Type|Type */
    public $ofType;

    /**
     * @param callable():Type|Type $type
     */
    public function __construct($type)
    {
        $this->ofType = is_callable($type) ? $type : Type::assertType($type);
    }

    public function toString(): string
    {
        return '[' . $this->getOfType()->toString() . ']';
    }

    public function getOfType(): Type
    {
        return Schema::resolveType($this->ofType);
    }

    public function getWrappedType(bool $recurse = false): Type
    {
        $type = $this->getOfType();

        return $recurse && $type instanceof WrappingType
            ? $type->getWrappedType($recurse)
            : $type;
    }
}
