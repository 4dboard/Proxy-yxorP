<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Utils;

use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\ArgumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NonNullTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectFieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Type\Definition\CompositeType;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldArgument;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\HasFieldsType;
use yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\ListOfType;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\OutputType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use yxorP\app\lib\data\graphQL\Type\Definition\WrappingType;
use yxorP\app\lib\data\graphQL\Type\Introspection;
use yxorP\app\lib\data\graphQL\Type\Schema;
use function array_map;
use function array_merge;
use function array_pop;
use function count;
use function is_array;
use function sprintf;

class TypeInfo
{
    /** @var Schema */
    private Schema $schema;

    /** @var array<(OutputType&Type)|null> */
    private array $typeStack;

    /** @var array<(CompositeType&Type)|null> */
    private array $parentTypeStack;

    /** @var array<(InputType&Type)|null> */
    private array $inputTypeStack;

    /** @var array<FieldDefinition> */
    private array $fieldDefStack;

    /** @var array */
    private array $defaultValueStack;

    /** @var Directive|null */
    private ?Directive $directive;

    /** @var FieldArgument|null */
    private ?FieldArgument $argument;

    /** @var mixed */
    private mixed $enumValue;

    /**
     * @param Type|null $initialType
     */
    public function __construct(Schema $schema, Type $initialType = null)
    {
        $this->schema = $schema;
        $this->typeStack = [];
        $this->parentTypeStack = [];
        $this->inputTypeStack = [];
        $this->fieldDefStack = [];
        $this->defaultValueStack = [];

        if ($initialType === null) {
            return;
        }

        if (Type::isInputType($initialType)) {
            $this->inputTypeStack[] = $initialType;
        }
        if (Type::isCompositeType($initialType)) {
            $this->parentTypeStack[] = $initialType;
        }
        if (!Type::isOutputType($initialType)) {
            return;
        }

        $this->typeStack[] = $initialType;
    }

    /**
     * @deprecated moved to GraphQL\Utils\TypeComparators
     *
     * @codeCoverageIgnore
     */
    public static function isEqualType(Type $typeA, Type $typeB): bool
    {
        return TypeComparators::isEqualType($typeA, $typeB);
    }

    /**
     * @deprecated moved to GraphQL\Utils\TypeComparators
     *
     * @codeCoverageIgnore
     */
    public static function isTypeSubTypeOf(Schema $schema, Type $maybeSubType, Type $superType): bool
    {
        return TypeComparators::isTypeSubTypeOf($schema, $maybeSubType, $superType);
    }

    /**
     * @deprecated moved to GraphQL\Utils\TypeComparators
     *
     * @codeCoverageIgnore
     */
    public static function doTypesOverlap(Schema $schema, CompositeType $typeA, CompositeType $typeB): bool
    {
        return TypeComparators::doTypesOverlap($schema, $typeA, $typeB);
    }

    /**
     * @param Type[] $typeMap
     *
     * @return Type[]
     */
    public static function extractTypesFromDirectives(Directive $directive, array $typeMap = []): ?array
    {
        if (is_array($directive->args)) {
            foreach ($directive->args as $arg) {
                $typeMap = self::extractTypes($arg->getType(), $typeMap);
            }
        }

        return $typeMap;
    }

    /**
     * Given root type scans through all fields to find nested types. Returns array where keys are for type name
     * and value contains corresponding type instance.
     *
     * Example output:
     * [
     *     'String' => $instanceOfStringType,
     *     'MyType' => $instanceOfMyType,
     *     ...
     * ]
     *
     * @param Type|null $type
     * @param Type[]|null $typeMap
     *
     * @return Type[]|null
     */
    public static function extractTypes(?Type $type, ?array $typeMap = null): ?array
    {
        if (!$typeMap) {
            $typeMap = [];
        }
        if (!$type) {
            return $typeMap;
        }

        if ($type instanceof WrappingType) {
            return self::extractTypes($type->getWrappedType(true), $typeMap);
        }

        if (!$type instanceof Type) {
            // Preserve these invalid types in map (at numeric index) to make them
            // detectable during $schema->validate()
            $i = 0;
            $alreadyInMap = false;
            while (isset($typeMap[$i])) {
                $alreadyInMap = $alreadyInMap || $typeMap[$i] === $type;
                $i++;
            }
            if (!$alreadyInMap) {
                $typeMap[$i] = $type;
            }

            return $typeMap;
        }

        if (isset($typeMap[$type->name])) {
            Utils::invariant(
                $typeMap[$type->name] === $type,
                sprintf('Schema must contain unique named types but contains multiple types named "%s" ', $type) .
                '(see http://webonyx.github.io/graphql-php/type-system/#type-registry).'
            );

            return $typeMap;
        }
        $typeMap[$type->name] = $type;

        $nestedTypes = [];

        $nestedTypes = $type->getTypes();
        $nestedTypes = array_merge($nestedTypes, $type->getInterfaces());

        if ($type instanceof HasFieldsType) {
            foreach ($type->getFields() as $field) {
                if (count($field->args) > 0) {
                    $fieldArgTypes = array_map(
                        static function (FieldArgument $arg): Type {
                            return $arg->getType();
                        },
                        $field->args
                    );

                    $nestedTypes = array_merge($nestedTypes, $fieldArgTypes);
                }
                $nestedTypes[] = $field->getType();
            }
        }
        if ($type instanceof InputObjectType) {
            foreach ($type->getFields() as $field) {
                $nestedTypes[] = $field->getType();
            }
        }
        foreach ($nestedTypes as $nestedType) {
            $typeMap = self::extractTypes($nestedType, $typeMap);
        }

        return $typeMap;
    }

    /**
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\InputType|null (Type&InputType)|null
     */
    public function getParentInputType(): ?InputType
    {
        return $this->inputTypeStack[count($this->inputTypeStack) - 2] ?? null;
    }

    public function getArgument(): ?FieldArgument
    {
        return $this->argument;
    }

    /**
     * @return mixed
     */
    public function getEnumValue(): mixed
    {
        return $this->enumValue;
    }

    public function enter(Node $node)
    {
        $schema = $this->schema;

        // Note: many of the types below are explicitly typed as "mixed" to drop
        // any assumptions of a valid schema to ensure runtime types are properly
        // checked before continuing since TypeInfo is used as part of validation
        // which occurs before guarantees of schema and document validity.
        switch (true) {
            case $node instanceof SelectionSetNode:
                $namedType = Type::getNamedType($this->getType());
                $this->parentTypeStack[] = Type::isCompositeType($namedType) ? $namedType : null;
                break;

            case $node instanceof FieldNode:
                $parentType = $this->getParentType();
                $fieldDef = null;
                if ($parentType) {
                    $fieldDef = self::getFieldDefinition($schema, $parentType, $node);
                }
                $fieldType = null;
                $fieldType = $fieldDef?->getType();
                $this->fieldDefStack[] = $fieldDef;
                $this->typeStack[] = Type::isOutputType($fieldType) ? $fieldType : null;
                break;

            case $node instanceof DirectiveNode:
                $this->directive = $schema->getDirective($node->name->value);
                break;

            case $node instanceof OperationDefinitionNode:
                $type = null;
                if ($node->operation === 'query') {
                    $type = $schema->getQueryType();
                } elseif ($node->operation === 'mutation') {
                    $type = $schema->getMutationType();
                } elseif ($node->operation === 'subscription') {
                    $type = $schema->getSubscriptionType();
                }
                $this->typeStack[] = Type::isOutputType($type) ? $type : null;
                break;

            case $node instanceof InlineFragmentNode:
            case $node instanceof FragmentDefinitionNode:
                $typeConditionNode = $node->typeCondition;
                $outputType = $typeConditionNode
                    ? self::typeFromAST(
                        $schema,
                        $typeConditionNode
                    )
                    : Type::getNamedType($this->getType());
                $this->typeStack[] = Type::isOutputType($outputType) ? $outputType : null;
                break;

            case $node instanceof VariableDefinitionNode:
                $inputType = self::typeFromAST($schema, $node->type);
                $this->inputTypeStack[] = Type::isInputType($inputType) ? $inputType : null; // push
                break;

            case $node instanceof ArgumentNode:
                $fieldOrDirective = $this->getDirective() ?? $this->getFieldDef();
                $argDef = $argType = null;
                if ($fieldOrDirective) {
                    /** @var FieldArgument $argDef */
                    $argDef = Utils::find(
                        $fieldOrDirective->args,
                        static function ($arg) use ($node): bool {
                            return $arg->name === $node->name->value;
                        }
                    );
                    $argType = $argDef?->getType();
                }
                $this->argument = $argDef;
                $this->defaultValueStack[] = $argDef && $argDef->defaultValueExists() ? $argDef->defaultValue : Utils::undefined();
                $this->inputTypeStack[] = Type::isInputType($argType) ? $argType : null;
                break;

            case $node instanceof ListValueNode:
                $type = $this->getInputType();
                $listType = $type === null ? null : Type::getNullableType($type);
                $itemType = $listType instanceof ListOfType
                    ? $listType->getWrappedType()
                    : $listType;
                // List positions never have a default value.
                $this->defaultValueStack[] = Utils::undefined();
                $this->inputTypeStack[] = Type::isInputType($itemType) ? $itemType : null;
                break;

            case $node instanceof ObjectFieldNode:
                $objectType = Type::getNamedType($this->getInputType());
                $fieldType = null;
                $inputField = null;
                $inputFieldType = null;
                if ($objectType instanceof InputObjectType) {
                    $tmp = $objectType->getFields();
                    $inputField = $tmp[$node->name->value] ?? null;
                    $inputFieldType = $inputField?->getType();
                }
                $this->defaultValueStack[] = $inputField && $inputField->defaultValueExists() ? $inputField->defaultValue : Utils::undefined();
                $this->inputTypeStack[] = Type::isInputType($inputFieldType) ? $inputFieldType : null;
                break;

            case $node instanceof EnumValueNode:
                $enumType = Type::getNamedType($this->getInputType());
                $enumValue = null;
                if ($enumType instanceof EnumType) {
                    $this->enumValue = $enumType->getValue($node->value);
                }
                $this->enumValue = $enumValue;
                break;
        }
    }

    /**
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\OutputType|null (Type & OutputType) | null
     */
    public function getType(): ?OutputType
    {
        return $this->typeStack[count($this->typeStack) - 1] ?? null;
    }

    /**
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\CompositeType|null (CompositeType & Type) | null
     */
    public function getParentType(): ?CompositeType
    {
        return $this->parentTypeStack[count($this->parentTypeStack) - 1] ?? null;
    }

    /**
     * Not exactly the same as the executor's definition of getFieldDef, in this
     * statically evaluated environment we do not always have an Object type,
     * and need to handle Interface and Union types.
     */
    private static function getFieldDefinition(Schema $schema, Type $parentType, FieldNode $fieldNode): ?FieldDefinition
    {
        $name = $fieldNode->name->value;
        $schemaMeta = Introspection::schemaMetaFieldDef();
        if ($name === $schemaMeta->name && $schema->getQueryType() === $parentType) {
            return $schemaMeta;
        }

        $typeMeta = Introspection::typeMetaFieldDef();
        if ($name === $typeMeta->name && $schema->getQueryType() === $parentType) {
            return $typeMeta;
        }
        $typeNameMeta = Introspection::typeNameMetaFieldDef();
        if ($name === $typeNameMeta->name) {
            return $typeNameMeta;
        }

        if ($parentType instanceof ObjectType ||
            $parentType instanceof InterfaceType
        ) {
            return $parentType->findField($name);
        }

        return null;
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Schema $schema
     * @param ListTypeNode|NamedTypeNode|NonNullTypeNode $inputTypeNode
     *
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\Type|null
     * @throws \Exception
     */
    public static function typeFromAST(Schema $schema, NonNullTypeNode|ListTypeNode|NamedTypeNode $inputTypeNode): ?Type
    {
        return AST::typeFromAST($schema, $inputTypeNode);
    }

    public function getDirective(): ?Directive
    {
        return $this->directive;
    }

    public function getFieldDef(): ?FieldDefinition
    {
        return $this->fieldDefStack[count($this->fieldDefStack) - 1] ?? null;
    }

    /**
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\InputType|null (Type & InputType) | null
     */
    public function getInputType(): ?InputType
    {
        return $this->inputTypeStack[count($this->inputTypeStack) - 1] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getDefaultValue(): mixed
    {
        return $this->defaultValueStack[count($this->defaultValueStack) - 1] ?? null;
    }

    public function leave(Node $node)
    {
        switch (true) {
            case $node instanceof SelectionSetNode:
                array_pop($this->parentTypeStack);
                break;

            case $node instanceof FieldNode:
                array_pop($this->fieldDefStack);
                array_pop($this->typeStack);
                break;

            case $node instanceof DirectiveNode:
                $this->directive = null;
                break;

            case $node instanceof OperationDefinitionNode:
            case $node instanceof InlineFragmentNode:
            case $node instanceof FragmentDefinitionNode:
                array_pop($this->typeStack);
                break;
            case $node instanceof VariableDefinitionNode:
                array_pop($this->inputTypeStack);
                break;
            case $node instanceof ArgumentNode:
                $this->argument = null;
                array_pop($this->defaultValueStack);
                array_pop($this->inputTypeStack);
                break;
            case $node instanceof ListValueNode:
            case $node instanceof ObjectFieldNode:
                array_pop($this->defaultValueStack);
                array_pop($this->inputTypeStack);
                break;
            case $node instanceof EnumValueNode:
                $this->enumValue = null;
                break;
        }
    }
}
