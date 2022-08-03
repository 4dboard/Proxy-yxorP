<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\DirectiveLocation;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ASTValidationContext;
use yxorP\app\lib\data\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function count;
use function get_class;
use function in_array;
use function sprintf;

class KnownDirectives extends ValidationRule
{
    #[ArrayShape([NodeKind::DIRECTIVE => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        try {
            return $this->getASTVisitor($context);
        } catch (Exception $e) {
        }
    }

    /**
     * @throws Exception
     */
    #[ArrayShape([NodeKind::DIRECTIVE => "\Closure"])] public function getASTVisitor(ASTValidationContext $context): array
    {
        $locationsMap = [];
        $schema = $context->getSchema();
        $definedDirectives = $schema
            ? $schema->getDirectives()
            : Directive::getInternalDirectives();

        foreach ($definedDirectives as $directive) {
            $locationsMap[$directive->name] = $directive->locations;
        }

        $astDefinition = $context->getDocument()->definitions;

        foreach ($astDefinition as $def) {
            if (!($def instanceof DirectiveDefinitionNode)) {
                continue;
            }

            $locationsMap[$def->name->value] = Utils::map(
                $def->locations,
                static function ($name): string {
                    return $name->value;
                }
            );
        }

        return [
            NodeKind::DIRECTIVE => function (
                DirectiveNode $node,
                              $key,
                              $parent,
                              $path,
                              $ancestors
            ) use (
                $context,
                $locationsMap
            ): void {
                $name = $node->name->value;
                $locations = $locationsMap[$name] ?? null;

                if (!$locations) {
                    $context->reportError(new Error(
                        self::unknownDirectiveMessage($name),
                        [$node]
                    ));

                    return;
                }

                $candidateLocation = $this->getDirectiveLocationForASTPath($ancestors);

                if (!$candidateLocation || in_array($candidateLocation, $locations, true)) {
                    return;
                }
                $context->reportError(
                    new Error(
                        self::misplacedDirectiveMessage($name, $candidateLocation),
                        [$node]
                    )
                );
            },
        ];
    }

    public static function unknownDirectiveMessage($directiveName): string
    {
        return sprintf('Unknown directive "%s".', $directiveName);
    }

    /**
     * @param Node[]|NodeList[] $ancestors The type is actually (Node|NodeList)[] but this PSR-5 syntax is so far not supported by most of the tools
     *
     * @return string
     * @throws Exception
     */
    private function getDirectiveLocationForASTPath(array $ancestors): string
    {
        $appliedTo = $ancestors[count($ancestors) - 1];
        switch (true) {
            case $appliedTo instanceof OperationDefinitionNode:
                switch ($appliedTo->operation) {
                    case 'query':
                        return DirectiveLocation::QUERY;
                    case 'mutation':
                        return DirectiveLocation::MUTATION;
                    case 'subscription':
                        return DirectiveLocation::SUBSCRIPTION;
                }
                break;
            case $appliedTo instanceof FieldNode:
                return DirectiveLocation::FIELD;
            case $appliedTo instanceof FragmentSpreadNode:
                return DirectiveLocation::FRAGMENT_SPREAD;
        }

        throw new Exception('Unknown directive location: ' . get_class($appliedTo));
    }

    public static function misplacedDirectiveMessage($directiveName, $location): string
    {
        return sprintf('Directive "%s" may not be used on "%s".', $directiveName, $location);
    }

    #[ArrayShape([NodeKind::DIRECTIVE => "\Closure"])] public function getSDLVisitor(SDLValidationContext $context): array
    {
        try {
            return $this->getASTVisitor($context);
        } catch (Exception $e) {
        }
    }
}
