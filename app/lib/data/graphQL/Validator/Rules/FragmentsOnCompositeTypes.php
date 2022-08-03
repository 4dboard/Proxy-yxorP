<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\Printer;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class FragmentsOnCompositeTypes extends ValidationRule
{
    #[ArrayShape([NodeKind::INLINE_FRAGMENT => "\Closure", NodeKind::FRAGMENT_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        return [
            NodeKind::INLINE_FRAGMENT => static function (InlineFragmentNode $node) use ($context): void {
                if (!$node->typeCondition) {
                    return;
                }

                $type = TypeInfo::typeFromAST($context->getSchema(), $node->typeCondition);
                if (!$type || Type::isCompositeType($type)) {
                    return;
                }

                $context->reportError(new Error(
                    static::inlineFragmentOnNonCompositeErrorMessage($type),
                    [$node->typeCondition]
                ));
            },
            NodeKind::FRAGMENT_DEFINITION => static function (FragmentDefinitionNode $node) use ($context): void {
                $type = TypeInfo::typeFromAST($context->getSchema(), $node->typeCondition);

                if (!$type || Type::isCompositeType($type)) {
                    return;
                }

                $context->reportError(new Error(
                    static::fragmentOnNonCompositeErrorMessage(
                        $node->name->value,
                        Printer::doPrint($node->typeCondition)
                    ),
                    [$node->typeCondition]
                ));
            },
        ];
    }

    public static function inlineFragmentOnNonCompositeErrorMessage($type): string
    {
        return sprintf('Fragment cannot condition on non composite type "%s".', $type);
    }

    public static function fragmentOnNonCompositeErrorMessage($fragName, $type): string
    {
        return sprintf('Fragment "%s" cannot condition on non composite type "%s".', $fragName, $type);
    }
}
