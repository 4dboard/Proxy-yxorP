<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Type\Definition\Type;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function sprintf;

class ScalarLeafs extends ValidationRule
{
    public static function noSubselectionAllowedMessage($field, $type)
    {
        return sprintf('Field "%s" of type "%s" must not have a sub selection.', $field, $type);
    }

    public static function requiredSubselectionMessage($field, $type)
    {
        return sprintf('Field "%s" of type "%s" must have a sub selection.', $field, $type);
    }

    public function getVisitor(ValidationContext $context)
    {
        return [
            NodeKind::FIELD => static function (FieldNode $node) use ($context): void {
                $type = $context->getType();
                if (!$type) {
                    return;
                }

                if (Type::isLeafType(Type::getNamedType($type))) {
                    if ($node->selectionSet) {
                        $context->reportError(new Error(
                            self::noSubselectionAllowedMessage($node->name->value, $type),
                            [$node->selectionSet]
                        ));
                    }
                } elseif (!$node->selectionSet) {
                    $context->reportError(new Error(
                        self::requiredSubselectionMessage($node->name->value, $type),
                        [$node]
                    ));
                }
            },
        ];
    }
}
