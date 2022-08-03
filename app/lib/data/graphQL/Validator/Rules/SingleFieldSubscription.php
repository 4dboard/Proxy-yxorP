<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_splice;
use function count;
use function sprintf;

class SingleFieldSubscription extends ValidationRule
{
    /**
     * @return array<string, callable>
     */
    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        return [
            NodeKind::OPERATION_DEFINITION => static function (OperationDefinitionNode $node) use ($context): VisitorOperation {
                if ($node->operation === 'subscription') {
                    $selections = $node->selectionSet->selections;

                    if (count($selections) !== 1) {
                        if ($selections instanceof NodeList) {
                            $offendingSelections = $selections->splice(1, count($selections));
                        } else {
                            $offendingSelections = array_splice($selections, 1);
                        }

                        $context->reportError(new Error(
                            self::multipleFieldsInOperation($node->name->value ?? null),
                            $offendingSelections
                        ));
                    }
                }

                return Visitor::skipNode();
            },
        ];
    }

    public static function multipleFieldsInOperation(?string $operationName): string
    {
        if ($operationName === null) {
            return 'Anonymous Subscription must select only one top level field.';
        }

        return sprintf('Subscription "%s" must select only one top level field.', $operationName);
    }
}
