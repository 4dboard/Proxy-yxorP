<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectFieldNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Validator\ASTValidationContext;
use yxorP\app\lib\data\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_pop;
use function sprintf;

class UniqueInputFieldNames extends ValidationRule
{
    /** @var array<string, NameNode> */
    public $knownNames;

    /** @var array<array<string, NameNode>> */
    public $knownNameStack;

    public static function duplicateInputFieldMessage($fieldName)
    {
        return sprintf('There can be only one input field named "%s".', $fieldName);
    }

    public function getVisitor(ValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }

    public function getASTVisitor(ASTValidationContext $context)
    {
        $this->knownNames = [];
        $this->knownNameStack = [];

        return [
            NodeKind::OBJECT => [
                'enter' => function (): void {
                    $this->knownNameStack[] = $this->knownNames;
                    $this->knownNames = [];
                },
                'leave' => function (): void {
                    $this->knownNames = array_pop($this->knownNameStack);
                },
            ],
            NodeKind::OBJECT_FIELD => function (ObjectFieldNode $node) use ($context): VisitorOperation {
                $fieldName = $node->name->value;

                if (isset($this->knownNames[$fieldName])) {
                    $context->reportError(new Error(
                        self::duplicateInputFieldMessage($fieldName),
                        [$this->knownNames[$fieldName], $node->name]
                    ));
                } else {
                    $this->knownNames[$fieldName] = $node->name;
                }

                return Visitor::skipNode();
            },
        ];
    }

    public function getSDLVisitor(SDLValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }
}
