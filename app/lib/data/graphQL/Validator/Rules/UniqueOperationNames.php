<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class UniqueOperationNames extends ValidationRule
{
    /** @var NameNode[] */
    public array $knownOperationNames;

    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure", NodeKind::FRAGMENT_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context)
    {
        $this->knownOperationNames = [];

        return [
            NodeKind::OPERATION_DEFINITION => function (OperationDefinitionNode $node) use ($context): VisitorOperation {
                $operationName = $node->name;

                if ($operationName !== null) {
                    if (!isset($this->knownOperationNames[$operationName->value])) {
                        $this->knownOperationNames[$operationName->value] = $operationName;
                    } else {
                        $context->reportError(new Error(
                            self::duplicateOperationNameMessage($operationName->value),
                            [$this->knownOperationNames[$operationName->value], $operationName]
                        ));
                    }
                }

                return Visitor::skipNode();
            },
            NodeKind::FRAGMENT_DEFINITION => static function (): VisitorOperation {
                return Visitor::skipNode();
            },
        ];
    }

    public static function duplicateOperationNameMessage($operationName)
    {
        return sprintf('There can be only one operation named "%s".', $operationName);
    }
}
