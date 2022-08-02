<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\ArgumentNode;
use yxorP\app\lib\graphQL\Language\AST\NameNode;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Language\Visitor;
use yxorP\app\lib\graphQL\Language\VisitorOperation;
use yxorP\app\lib\graphQL\Validator\ASTValidationContext;
use yxorP\app\lib\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function sprintf;

class UniqueArgumentNames extends ValidationRule
{
    /** @var NameNode[] */
    public $knownArgNames;

    public static function duplicateArgMessage($argName)
    {
        return sprintf('There can be only one argument named "%s".', $argName);
    }

    public function getSDLVisitor(SDLValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }

    public function getASTVisitor(ASTValidationContext $context)
    {
        $this->knownArgNames = [];

        return [
            NodeKind::FIELD => function (): void {
                $this->knownArgNames = [];
            },
            NodeKind::DIRECTIVE => function (): void {
                $this->knownArgNames = [];
            },
            NodeKind::ARGUMENT => function (ArgumentNode $node) use ($context): VisitorOperation {
                $argName = $node->name->value;
                if ($this->knownArgNames[$argName] ?? false) {
                    $context->reportError(new Error(
                        self::duplicateArgMessage($argName),
                        [$this->knownArgNames[$argName], $node->name]
                    ));
                } else {
                    $this->knownArgNames[$argName] = $node->name;
                }

                return Visitor::skipNode();
            },
        ];
    }

    public function getVisitor(ValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }
}
