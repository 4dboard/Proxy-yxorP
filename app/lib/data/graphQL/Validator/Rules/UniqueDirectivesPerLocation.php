<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\graphQL\Language\AST\Node;
use yxorP\app\lib\graphQL\Type\Definition\Directive;
use yxorP\app\lib\graphQL\Validator\ASTValidationContext;
use yxorP\app\lib\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function sprintf;

/**
 * Unique directive names per location
 *
 * A GraphQL document is only valid if all non-repeatable directives at
 * a given location are uniquely named.
 */
class UniqueDirectivesPerLocation extends ValidationRule
{
    public static function duplicateDirectiveMessage($directiveName)
    {
        return sprintf('The directive "%s" can only be used once at this location.', $directiveName);
    }

    public function getVisitor(ValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }

    public function getASTVisitor(ASTValidationContext $context)
    {
        /** @var array<string, true> $uniqueDirectiveMap */
        $uniqueDirectiveMap = [];

        $schema = $context->getSchema();
        $definedDirectives = $schema !== null
            ? $schema->getDirectives()
            : Directive::getInternalDirectives();
        foreach ($definedDirectives as $directive) {
            if ($directive->isRepeatable) {
                continue;
            }

            $uniqueDirectiveMap[$directive->name] = true;
        }

        $astDefinitions = $context->getDocument()->definitions;
        foreach ($astDefinitions as $definition) {
            if (!($definition instanceof DirectiveDefinitionNode)
                || $definition->repeatable
            ) {
                continue;
            }

            $uniqueDirectiveMap[$definition->name->value] = true;
        }

        return [
            'enter' => static function (Node $node) use ($uniqueDirectiveMap, $context): void {
                if (!isset($node->directives)) {
                    return;
                }

                $knownDirectives = [];

                /** @var DirectiveNode $directive */
                foreach ($node->directives as $directive) {
                    $directiveName = $directive->name->value;

                    if (!isset($uniqueDirectiveMap[$directiveName])) {
                        continue;
                    }

                    if (isset($knownDirectives[$directiveName])) {
                        $context->reportError(new Error(
                            self::duplicateDirectiveMessage($directiveName),
                            [$knownDirectives[$directiveName], $directive]
                        ));
                    } else {
                        $knownDirectives[$directiveName] = $directive;
                    }
                }
            },
        ];
    }

    public function getSDLVisitor(SDLValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }
}
