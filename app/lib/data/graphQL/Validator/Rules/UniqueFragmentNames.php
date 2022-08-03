<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class UniqueFragmentNames extends ValidationRule
{
    /** @var NameNode[] */
    public array $knownFragmentNames;

    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure", NodeKind::FRAGMENT_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        $this->knownFragmentNames = [];

        return [
            NodeKind::OPERATION_DEFINITION => static function (): VisitorOperation {
                return Visitor::skipNode();
            },
            NodeKind::FRAGMENT_DEFINITION => function (FragmentDefinitionNode $node) use ($context): VisitorOperation {
                $fragmentName = $node->name->value;
                if (!isset($this->knownFragmentNames[$fragmentName])) {
                    $this->knownFragmentNames[$fragmentName] = $node->name;
                } else {
                    $context->reportError(new Error(
                        self::duplicateFragmentNameMessage($fragmentName),
                        [$this->knownFragmentNames[$fragmentName], $node->name]
                    ));
                }

                return Visitor::skipNode();
            },
        ];
    }

    public static function duplicateFragmentNameMessage($fragName): string
    {
        return sprintf('There can be only one fragment named "%s".', $fragName);
    }
}
