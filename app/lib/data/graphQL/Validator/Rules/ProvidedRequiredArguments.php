<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Language\Visitor;
use yxorP\app\lib\graphQL\Language\VisitorOperation;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function sprintf;

class ProvidedRequiredArguments extends ValidationRule
{
    public static function missingFieldArgMessage($fieldName, $argName, $type)
    {
        return sprintf(
            'Field "%s" argument "%s" of type "%s" is required but not provided.',
            $fieldName,
            $argName,
            $type
        );
    }

    public function getVisitor(ValidationContext $context)
    {
        $providedRequiredArgumentsOnDirectives = new ProvidedRequiredArgumentsOnDirectives();

        return $providedRequiredArgumentsOnDirectives->getVisitor($context) + [
                NodeKind::FIELD => [
                    'leave' => static function (FieldNode $fieldNode) use ($context): ?VisitorOperation {
                        $fieldDef = $context->getFieldDef();

                        if (!$fieldDef) {
                            return Visitor::skipNode();
                        }
                        $argNodes = $fieldNode->arguments ?? [];

                        $argNodeMap = [];
                        foreach ($argNodes as $argNode) {
                            $argNodeMap[$argNode->name->value] = $argNode;
                        }
                        foreach ($fieldDef->args as $argDef) {
                            $argNode = $argNodeMap[$argDef->name] ?? null;
                            if ($argNode || !$argDef->isRequired()) {
                                continue;
                            }

                            $context->reportError(new Error(
                                self::missingFieldArgMessage($fieldNode->name->value, $argDef->name, $argDef->getType()),
                                [$fieldNode]
                            ));
                        }

                        return null;
                    },
                ],
            ];
    }
}
