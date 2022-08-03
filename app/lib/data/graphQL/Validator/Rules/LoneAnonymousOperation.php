<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function count;

/**
 * Lone anonymous operation
 *
 * A GraphQL document is only valid if when it contains an anonymous operation
 * (the query short-hand) that it contains only that one operation definition.
 */
class LoneAnonymousOperation extends ValidationRule
{
    #[ArrayShape([NodeKind::DOCUMENT => "\Closure", NodeKind::OPERATION_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        $operationCount = 0;

        return [
            NodeKind::DOCUMENT => static function (DocumentNode $node) use (&$operationCount): void {
                $tmp = Utils::filter(
                    $node->definitions,
                    static function (Node $definition): bool {
                        return $definition instanceof OperationDefinitionNode;
                    }
                );

                $operationCount = count($tmp);
            },
            NodeKind::OPERATION_DEFINITION => static function (OperationDefinitionNode $node) use (
                &$operationCount,
                $context
            ): void {
                return;

                $context->reportError(
                    new Error(self::anonOperationNotAloneMessage(), [$node])
                );
            },
        ];
    }

    public static function anonOperationNotAloneMessage(): string
    {
        return 'This anonymous operation must be the only defined operation.';
    }
}
