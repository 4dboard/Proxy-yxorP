<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Type\Definition\AbstractType;
use yxorP\app\lib\data\graphQL\Type\Definition\CompositeType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class PossibleFragmentSpreads extends ValidationRule
{
    #[ArrayShape([NodeKind::INLINE_FRAGMENT => "\Closure", NodeKind::FRAGMENT_SPREAD => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        return [
            NodeKind::INLINE_FRAGMENT => function (InlineFragmentNode $node) use ($context): void {
                $fragType = $context->getType();
                $parentType = $context->getParentType();

                if (!($fragType instanceof CompositeType) ||
                    !($parentType instanceof CompositeType) ||
                    $this->doTypesOverlap($context->getSchema(), $fragType, $parentType)) {
                    return;
                }

                $context->reportError(new Error(
                    self::typeIncompatibleAnonSpreadMessage($parentType, $fragType),
                    [$node]
                ));
            },
            NodeKind::FRAGMENT_SPREAD => function (FragmentSpreadNode $node) use ($context): void {
                $fragName = $node->name->value;
                $fragType = $this->getFragmentType($context, $fragName);
                $parentType = $context->getParentType();

                if (!$fragType ||
                    !$parentType ||
                    $this->doTypesOverlap($context->getSchema(), $fragType, $parentType)
                ) {
                    return;
                }

                $context->reportError(new Error(
                    self::typeIncompatibleSpreadMessage($fragName, $parentType, $fragType),
                    [$node]
                ));
            },
        ];
    }

    private function doTypesOverlap(Schema $schema, CompositeType $fragType, CompositeType $parentType): bool
    {
        // Checking in the order of the most frequently used scenarios:
        // Parent type === fragment type
        if ($parentType === $fragType) {
            return true;
        }

        // Parent type is interface or union, fragment type is object type
        if ($parentType instanceof AbstractType && $fragType instanceof ObjectType) {
            return $schema->isSubType($parentType, $fragType);
        }

        // Parent type is object type, fragment type is interface (or rather rare - union)
        if ($parentType instanceof ObjectType && $fragType instanceof AbstractType) {
            return $schema->isSubType($fragType, $parentType);
        }

        // Both are object types:
        if ($parentType instanceof ObjectType && $fragType instanceof ObjectType) {
            return false;
        }

        // Both are interfaces
        // This case may be assumed valid only when implementations of two interfaces intersect
        // But we don't have information about all implementations at runtime
        // (getting this information via $schema->getPossibleTypes() requires scanning through whole schema
        // which is very costly to do at each request due to PHP "shared nothing" architecture)
        //
        // So in this case we just make it pass - invalid fragment spreads will be simply ignored during execution
        // See also https://github.com/webonyx/graphql-php/issues/69#issuecomment-283954602
        if ($parentType instanceof InterfaceType && $fragType instanceof InterfaceType) {
            return true;

            // Note that there is one case when we do have information about all implementations:
            // When schema descriptor is defined ($schema->hasDescriptor())
            // BUT we must avoid situation when some query that worked in development had suddenly stopped
            // working in production. So staying consistent and always validate.
        }

        // Interface within union
        if ($parentType instanceof UnionType && $fragType instanceof InterfaceType) {
            foreach ($parentType->getTypes() as $type) {
                if ($type->implementsInterface($fragType)) {
                    return true;
                }
            }
        }

        if ($parentType instanceof InterfaceType && $fragType instanceof UnionType) {
            foreach ($fragType->getTypes() as $type) {
                if ($type->implementsInterface($parentType)) {
                    return true;
                }
            }
        }

        if ($parentType instanceof UnionType && $fragType instanceof UnionType) {
            foreach ($fragType->getTypes() as $type) {
                if ($parentType->isPossibleType($type)) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function typeIncompatibleAnonSpreadMessage($parentType, $fragType): string
    {
        return sprintf(
            'Fragment cannot be spread here as objects of type "%s" can never be of type "%s".',
            $parentType,
            $fragType
        );
    }

    private function getFragmentType(ValidationContext $context, $name): CompositeType|\yxorP\app\lib\data\graphQL\Type\Definition\Type|null
    {
        $frag = $context->getFragment($name);
        if ($frag) {
            $type = TypeInfo::typeFromAST($context->getSchema(), $frag->typeCondition);
            if ($type instanceof CompositeType) {
                return $type;
            }
        }

        return null;
    }

    public static function typeIncompatibleSpreadMessage($fragName, $parentType, $fragType): string
    {
        return sprintf(
            'Fragment "%s" cannot be spread here as objects of type "%s" can never be of type "%s".',
            $fragName,
            $parentType,
            $fragType
        );
    }
}
