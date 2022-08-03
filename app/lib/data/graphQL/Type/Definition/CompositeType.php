<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

/*
export type GraphQLCompositeType =
GraphQLObjectType |
GraphQLInterfaceType |
GraphQLUnionType;
*/

interface CompositeType extends ImplementingType, ImplementingType
{
}
