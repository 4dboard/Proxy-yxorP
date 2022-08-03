<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\ExecutableDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\TypeSystemDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

/**
 * Executable definitions
 *
 * A GraphQL document is only valid for execution if all definitions are either
 * operation or fragment definitions.
 */
class ExecutableDefinitions extends ValidationRule
{
    #[ArrayShape([NodeKind::DOCUMENT => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        return [
            NodeKind::DOCUMENT => static function (DocumentNode $node) use ($context): VisitorOperation {
                /** @var ExecutableDefinitionNode|TypeSystemDefinitionNode $definition */
                foreach ($node->definitions as $definition) {
                    if ($definition instanceof ExecutableDefinitionNode) {
                        continue;
                    }

                    $context->reportError(new Error(
                        self::nonExecutableDefinitionMessage($definition->name->value),
                        [$definition->name]
                    ));
                }

                return Visitor::skipNode();
            },
        ];
    }

    public static function nonExecutableDefinitionMessage($defName): string
    {
        return sprintf('The "%s" definition is not executable.', $defName);
    }
}
