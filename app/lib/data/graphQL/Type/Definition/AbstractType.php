<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

/**
 * export type AbstractType =
 * InterfaceType |
 * UnionType;
 */
interface AbstractType
{
    /**
     * Resolves concrete ObjectType for given object value
     *
     * @param object $objectValue
     * @param array $context
     *
     * @return mixed
     */
    public function resolveType(object $objectValue, array $context, ResolveInfo $info): mixed;
}
