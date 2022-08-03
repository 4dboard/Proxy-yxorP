<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class NoUnusedFragments extends ValidationRule
{
    /** @var OperationDefinitionNode[] */
    public array $operationDefs;

    /** @var FragmentDefinitionNode[] */
    public array $fragmentDefs;

    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure", NodeKind::FRAGMENT_DEFINITION => "\Closure", NodeKind::DOCUMENT => "\Closure[]"])] public function getVisitor(ValidationContext $context)
    {
        $this->operationDefs = [];
        $this->fragmentDefs = [];

        return [
            NodeKind::OPERATION_DEFINITION => function ($node): VisitorOperation {
                $this->operationDefs[] = $node;

                return Visitor::skipNode();
            },
            NodeKind::FRAGMENT_DEFINITION => function (FragmentDefinitionNode $def): VisitorOperation {
                $this->fragmentDefs[] = $def;

                return Visitor::skipNode();
            },
            NodeKind::DOCUMENT => [
                'leave' => function () use ($context): void {
                    $fragmentNameUsed = [];

                    foreach ($this->operationDefs as $operation) {
                        foreach ($context->getRecursivelyReferencedFragments($operation) as $fragment) {
                            $fragmentNameUsed[$fragment->name->value] = true;
                        }
                    }

                    foreach ($this->fragmentDefs as $fragmentDef) {
                        $fragName = $fragmentDef->name->value;
                        if ($fragmentNameUsed[$fragName] ?? false) {
                            continue;
                        }

                        $context->reportError(new Error(
                            self::unusedFragMessage($fragName),
                            [$fragmentDef]
                        ));
                    }
                },
            ],
        ];
    }

    public static function unusedFragMessage($fragName)
    {
        return sprintf('Fragment "%s" is never used.', $fragName);
    }
}
