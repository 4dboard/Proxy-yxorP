<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Executor\Values;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Type\Introspection;
use yxorP\app\lib\data\graphQL\Type\Schema;
use function array_diff_key;
use function array_filter;
use function array_intersect_key;
use function array_key_exists;
use function array_keys;
use function array_merge;
use function array_merge_recursive;
use function array_unique;
use function array_values;
use function count;
use function in_array;
use function is_array;
use function is_numeric;

class QueryPlan
{
    /** @var string[][] */
    private $types = [];

    /** @var Schema */
    private $schema;

    /** @var array<string, mixed> */
    private $queryPlan = [];

    /** @var array */
    private $variableValues;

    /** @var FragmentDefinitionNode[] */
    private $fragments;

    /** @var bool */
    private $groupImplementorFields;

    /**
     * @param FieldNode[] $fieldNodes
     * @param array $variableValues
     * @param FragmentDefinitionNode[] $fragments
     * @param array $options
     */
    public function __construct(ObjectType $parentType, Schema $schema, iterable $fieldNodes, array $variableValues, array $fragments, array $options = [])
    {
        $this->schema = $schema;
        $this->variableValues = $variableValues;
        $this->fragments = $fragments;
        $this->groupImplementorFields = in_array('group-implementor-fields', $options, true);
        $this->analyzeQueryPlan($parentType, $fieldNodes);
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\ObjectType $parentType
     * @param FieldNode[] $fieldNodes
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function analyzeQueryPlan(ObjectType $parentType, iterable $fieldNodes): void
    {
        $queryPlan = [];
        $implementors = [];
        /** @var FieldNode $fieldNode */
        foreach ($fieldNodes as $fieldNode) {
            if (!$fieldNode->selectionSet) {
                continue;
            }

            $type = $parentType->getField($fieldNode->name->value)->getType();
            if ($type instanceof WrappingType) {
                $type = $type->getWrappedType(true);
            }

            $subfields = $this->analyzeSelectionSet($fieldNode->selectionSet, $type, $implementors);

            $this->types[$type->name] = array_unique(array_merge(
                array_key_exists($type->name, $this->types) ? $this->types[$type->name] : [],
                array_keys($subfields)
            ));

            $queryPlan = array_merge_recursive(
                $queryPlan,
                $subfields
            );
        }

        if ($this->groupImplementorFields) {
            $this->queryPlan = ['fields' => $queryPlan];

            if ($implementors) {
                $this->queryPlan['implementors'] = $implementors;
            }
        } else {
            $this->queryPlan = $queryPlan;
        }
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode $selectionSet
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\Type $parentType
     * @param array $implementors
     *
     * @return array
     *
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function analyzeSelectionSet(SelectionSetNode $selectionSet, Type $parentType, array &$implementors): array
    {
        $fields = [];
        $implementors = [];
        foreach ($selectionSet->selections as $selectionNode) {
            if ($selectionNode instanceof FieldNode) {
                $fieldName = $selectionNode->name->value;

                if ($fieldName === Introspection::TYPE_NAME_FIELD_NAME) {
                    continue;
                }

                $type = $parentType->getField($fieldName);
                $selectionType = $type->getType();

                $subfields = [];
                $subImplementors = [];
                if ($selectionNode->selectionSet) {
                    $subfields = $this->analyzeSubFields($selectionType, $selectionNode->selectionSet, $subImplementors);
                }

                $fields[$fieldName] = [
                    'type' => $selectionType,
                    'fields' => $subfields ?? [],
                    'args' => Values::getArgumentValues($type, $selectionNode, $this->variableValues),
                ];
                if ($this->groupImplementorFields && $subImplementors) {
                    $fields[$fieldName]['implementors'] = $subImplementors;
                }
            } elseif ($selectionNode instanceof FragmentSpreadNode) {
                $spreadName = $selectionNode->name->value;
                if (isset($this->fragments[$spreadName])) {
                    $fragment = $this->fragments[$spreadName];
                    $type = $this->schema->getType($fragment->typeCondition->name->value);
                    $subfields = $this->analyzeSubFields($type, $fragment->selectionSet);
                    $fields = $this->mergeFields($parentType, $type, $fields, $subfields, $implementors);
                }
            } elseif ($selectionNode instanceof InlineFragmentNode) {
                $type = $this->schema->getType($selectionNode->typeCondition->name->value);
                $subfields = $this->analyzeSubFields($type, $selectionNode->selectionSet);
                $fields = $this->mergeFields($parentType, $type, $fields, $subfields, $implementors);
            }
        }

        return $fields;
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\Type $type
     * @param \yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode $selectionSet
     * @param array $implementors
     *
     * @return array
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function analyzeSubFields(Type $type, SelectionSetNode $selectionSet, array &$implementors = []): array
    {
        if ($type instanceof WrappingType) {
            $type = $type->getWrappedType(true);
        }

        $subfields = [];
        $subfields = $this->analyzeSelectionSet($selectionSet, $type, $implementors);
        $this->types[$type->name] = array_unique(array_merge(
            array_key_exists($type->name, $this->types) ? $this->types[$type->name] : [],
            array_keys($subfields)
        ));

        return $subfields;
    }

    /**
     * @param array $fields
     * @param array $subfields
     * @param array $implementors
     *
     * @return array
     */
    private function mergeFields(Type $parentType, Type $type, array $fields, array $subfields, array &$implementors): array
    {
        if (false) {
            $implementors[$type->name] = [
                'type' => $type,
                'fields' => $this->arrayMergeDeep(
                    $implementors[$type->name]['fields'] ?? [],
                    array_diff_key($subfields, $fields)
                ),
            ];

            $fields = $this->arrayMergeDeep(
                $fields,
                array_intersect_key($subfields, $fields)
            );
        } else {
            $fields = $this->arrayMergeDeep(
                $subfields,
                $fields
            );
        }

        return $fields;
    }

    /**
     * similar to array_merge_recursive this merges nested arrays, but handles non array values differently
     * while array_merge_recursive tries to merge non array values, in this implementation they will be overwritten
     *
     * @see https://stackoverflow.com/a/25712428
     *
     * @param array $array1
     * @param array $array2
     *
     * @return array
     */
    private function arrayMergeDeep(array $array1, array $array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => $value) {
            if (is_numeric($key)) {
                if (!in_array($value, $merged, true)) {
                    $merged[] = $value;
                }
            } elseif (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->arrayMergeDeep($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }

    /**
     * @return array
     */
    public function queryPlan(): array
    {
        return $this->queryPlan;
    }

    public function hasType(string $type): bool
    {
        return count(array_filter($this->getReferencedTypes(), static function (string $referencedType) use ($type): bool {
                return $type === $referencedType;
            })) > 0;
    }

    /**
     * @return string[]
     */
    public function getReferencedTypes(): array
    {
        return array_keys($this->types);
    }

    public function hasField(string $field): bool
    {
        return count(array_filter($this->getReferencedFields(), static function (string $referencedField) use ($field): bool {
                return $field === $referencedField;
            })) > 0;
    }

    /**
     * @return string[]
     */
    public function getReferencedFields(): array
    {
        return array_values(array_unique(array_merge(...array_values($this->types))));
    }

    /**
     * @return string[]
     */
    public function subFields(string $typename): array
    {
        if (!array_key_exists($typename, $this->types)) {
            return [];
        }

        return $this->types[$typename];
    }
}
