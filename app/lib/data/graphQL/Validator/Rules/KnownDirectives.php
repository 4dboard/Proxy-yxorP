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
    public function getVisitor(ValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }

    /**
     * @throws \Exception
     */
    #[ArrayShape([NodeKind::DIRECTIVE => "\Closure"])] public function getASTVisitor(ASTValidationContext $context)
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

    public static function unknownDirectiveMessage($directiveName)
    {
        return sprintf('Unknown directive "%s".', $directiveName);
    }

    /**
     * @param Node[]|NodeList[] $ancestors The type is actually (Node|NodeList)[] but this PSR-5 syntax is so far not supported by most of the tools
     *
     * @return string
     * @throws \Exception
     */
    private function getDirectiveLocationForASTPath(array $ancestors)
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
            case $appliedTo instanceof InlineFragmentNode:
                return DirectiveLocation::INLINE_FRAGMENT;
            case $appliedTo instanceof FragmentDefinitionNode:
                return DirectiveLocation::FRAGMENT_DEFINITION;
            case $appliedTo instanceof VariableDefinitionNode:
                return DirectiveLocation::VARIABLE_DEFINITION;
            case $appliedTo instanceof SchemaDefinitionNode:
            case $appliedTo instanceof SchemaTypeExtensionNode:
                return DirectiveLocation::SCHEMA;
            case $appliedTo instanceof ScalarTypeDefinitionNode:
            case $appliedTo instanceof ScalarTypeExtensionNode:
                return DirectiveLocation::SCALAR;
            case $appliedTo instanceof ObjectTypeDefinitionNode:
            case $appliedTo instanceof ObjectTypeExtensionNode:
                return DirectiveLocation::OBJECT;
            case $appliedTo instanceof FieldDefinitionNode:
                return DirectiveLocation::FIELD_DEFINITION;
            case $appliedTo instanceof InterfaceTypeDefinitionNode:
            case $appliedTo instanceof InterfaceTypeExtensionNode:
                return DirectiveLocation::IFACE;
            case $appliedTo instanceof UnionTypeDefinitionNode:
            case $appliedTo instanceof UnionTypeExtensionNode:
                return DirectiveLocation::UNION;
            case $appliedTo instanceof EnumTypeDefinitionNode:
            case $appliedTo instanceof EnumTypeExtensionNode:
                return DirectiveLocation::ENUM;
            case $appliedTo instanceof EnumValueDefinitionNode:
                return DirectiveLocation::ENUM_VALUE;
            case $appliedTo instanceof InputObjectTypeDefinitionNode:
            case $appliedTo instanceof InputObjectTypeExtensionNode:
                return DirectiveLocation::INPUT_OBJECT;
            case $appliedTo instanceof InputValueDefinitionNode:
                $parentNode = $ancestors[count($ancestors) - 3];

                return $parentNode instanceof InputObjectTypeDefinitionNode
                    ? DirectiveLocation::INPUT_FIELD_DEFINITION
                    : DirectiveLocation::ARGUMENT_DEFINITION;
        }

        throw new Exception('Unknown directive location: ' . get_class($appliedTo));
    }

    public static function misplacedDirectiveMessage($directiveName, $location)
    {
        return sprintf('Directive "%s" may not be used on "%s".', $directiveName, $location);
    }

    public function getSDLVisitor(SDLValidationContext $context)
    {
        return $this->getASTVisitor($context);
    }
}
