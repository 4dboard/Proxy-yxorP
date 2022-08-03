<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\ArgumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NonNullTypeNode;
use yxorP\app\lib\data\graphQL\Language\Printer;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldArgument;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ASTValidationContext;
use yxorP\app\lib\data\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_filter;

/**
 * Provided required arguments on directives
 *
 * A directive is only valid if all required (non-null without a
 * default value) field arguments have been provided.
 */
class ProvidedRequiredArgumentsOnDirectives extends ValidationRule
{
    public function getSDLVisitor(SDLValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }

    /**
     * @throws \Exception
     */
    #[ArrayShape([NodeKind::DIRECTIVE => "\Closure[]"])] public function getASTVisitor(ASTValidationContext $context)
    {
        $requiredArgsMap = [];
        $schema = $context->getSchema();
        $definedDirectives = $schema
            ? $schema->getDirectives()
            : Directive::getInternalDirectives();

        foreach ($definedDirectives as $directive) {
            $requiredArgsMap[$directive->name] = Utils::keyMap(
                array_filter($directive->args, static function (FieldArgument $arg): bool {
                    return $arg->isRequired();
                }),
                static function (FieldArgument $arg): string {
                    return $arg->name;
                }
            );
        }

        $astDefinition = $context->getDocument()->definitions;
        foreach ($astDefinition as $def) {
            if (!($def instanceof DirectiveDefinitionNode)) {
                continue;
            }
            $arguments = $def->arguments ?? [];

            $requiredArgsMap[$def->name->value] = Utils::keyMap(
                Utils::filter($arguments, static function (InputValueDefinitionNode $argument): bool {
                    return $argument->type instanceof NonNullTypeNode &&
                        (
                        !isset($argument->defaultValue)
                        );
                }),
                static function (InputValueDefinitionNode $argument): string {
                    return $argument->name->value;
                }
            );
        }

        return [
            NodeKind::DIRECTIVE => [
                // Validate on leave to allow for deeper errors to appear first.
                'leave' => static function (DirectiveNode $directiveNode) use ($requiredArgsMap, $context): ?string {
                    $directiveName = $directiveNode->name->value;
                    $requiredArgs = $requiredArgsMap[$directiveName] ?? null;
                    if (!$requiredArgs) {
                        return null;
                    }

                    $argNodes = $directiveNode->arguments ?? [];
                    $argNodeMap = Utils::keyMap(
                        $argNodes,
                        static function (ArgumentNode $arg): string {
                            return $arg->name->value;
                        }
                    );

                    foreach ($requiredArgs as $argName => $arg) {
                        if (isset($argNodeMap[$argName])) {
                            continue;
                        }

                        if ($arg instanceof FieldArgument) {
                            $argType = (string)$arg->getType();
                        } elseif ($arg instanceof InputValueDefinitionNode) {
                            $argType = Printer::doPrint($arg->type);
                        } else {
                            $argType = '';
                        }

                        $context->reportError(
                            new Error(static::missingDirectiveArgMessage($directiveName, $argName, $argType), [$directiveNode])
                        );
                    }

                    return null;
                },
            ],
        ];
    }

    public static function missingDirectiveArgMessage(string $directiveName, string $argName, string $type)
    {
        return 'Directive "@' . $directiveName . '" argument "' . $argName
            . '" of type "' . $type . '" is required but not provided.';
    }

    public function getVisitor(ValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }
}
