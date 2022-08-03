<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class UniqueVariableNames extends ValidationRule
{
    /** @var NameNode[] */
    public $knownVariableNames;

    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure", NodeKind::VARIABLE_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context)
    {
        $this->knownVariableNames = [];

        return [
            NodeKind::OPERATION_DEFINITION => function (): void {
                $this->knownVariableNames = [];
            },
            NodeKind::VARIABLE_DEFINITION => function (VariableDefinitionNode $node) use ($context): void {
                $variableName = $node->variable->name->value;
                if (!isset($this->knownVariableNames[$variableName])) {
                    $this->knownVariableNames[$variableName] = $node->variable->name;
                } else {
                    $context->reportError(new Error(
                        self::duplicateVariableMessage($variableName),
                        [$this->knownVariableNames[$variableName], $node->variable->name]
                    ));
                }
            },
        ];
    }

    public static function duplicateVariableMessage($variableName)
    {
        return sprintf('There can be only one variable named "%s".', $variableName);
    }
}
