***

# OverlappingFieldsCanBeMerged





* Full name: `\GraphQL\Validator\Rules\OverlappingFieldsCanBeMerged`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)



## Properties


### comparedFragmentPairs

A memoization for when two fragments are compared "between" each other for
conflicts. Two fragments may be compared many times, so memoizing this can
dramatically improve the performance of this validator.

```php
private \GraphQL\Utils\PairSet $comparedFragmentPairs
```






***

### cachedFieldsAndFragmentNames

A cache for the "field map" and list of fragment names found in any given
selection set. Selection sets may be asked for this information multiple
times, so this improves the performance of this validator.

```php
private \SplObjectStorage $cachedFieldsAndFragmentNames
```






***

## Methods


### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |




***

### findConflictsWithinSelectionSet

Find all conflicts found "within" a selection set, including those found
via spreading in fragments. Called when visiting each SelectionSet in the
GraphQL Document.

```php
private findConflictsWithinSelectionSet(\GraphQL\Validator\ValidationContext $context, \GraphQL\Type\Definition\CompositeType $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$parentType` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |




***

### getFieldsAndFragmentNames

Given a selection set, return the collection of fields (a mapping of response
name to field ASTs and definitions) as well as a list of fragment names
referenced via fragment spreads.

```php
private getFieldsAndFragmentNames(\GraphQL\Validator\ValidationContext $context, \GraphQL\Type\Definition\CompositeType $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet): array|\SplObjectStorage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$parentType` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |




***

### internalCollectFieldsAndFragmentNames

Given a reference to a fragment, return the represented collection of fields
as well as a list of nested fragment names referenced via fragment spreads.

```php
private internalCollectFieldsAndFragmentNames(\GraphQL\Validator\ValidationContext $context, \GraphQL\Type\Definition\CompositeType $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, array[][]& $astAndDefs, bool[]& $fragmentNames): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$parentType` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$astAndDefs` | **array[][]** |  |
| `$fragmentNames` | **bool[]** |  |




***

### collectConflictsWithin

Collect all Conflicts "within" one collection of fields.

```php
private collectConflictsWithin(\GraphQL\Validator\ValidationContext $context, array[]& $conflicts, array[] $fieldMap): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$conflicts` | **array[]** |  |
| `$fieldMap` | **array[]** |  |




***

### findConflict

Determines if there is a conflict between two particular fields, including
comparing their sub-fields.

```php
private findConflict(\GraphQL\Validator\ValidationContext $context, bool $parentFieldsAreMutuallyExclusive, string $responseName, array $field1, array $field2): array|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$parentFieldsAreMutuallyExclusive` | **bool** |  |
| `$responseName` | **string** |  |
| `$field1` | **array** |  |
| `$field2` | **array** |  |




***

### sameArguments



```php
private sameArguments(\GraphQL\Language\AST\ArgumentNode[] $arguments1, \GraphQL\Language\AST\ArgumentNode[] $arguments2): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments1` | **\GraphQL\Language\AST\ArgumentNode[]** |  |
| `$arguments2` | **\GraphQL\Language\AST\ArgumentNode[]** |  |




***

### sameValue



```php
private sameValue(\GraphQL\Language\AST\Node $value1, \GraphQL\Language\AST\Node $value2): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value1` | **\GraphQL\Language\AST\Node** |  |
| `$value2` | **\GraphQL\Language\AST\Node** |  |




***

### doTypesConflict

Two types conflict if both types could not apply to a value simultaneously.

```php
private doTypesConflict(\GraphQL\Type\Definition\Type $type1, \GraphQL\Type\Definition\Type $type2): bool
```

Composite types are ignored as their individual field types will be compared
later recursively. However List and Non-Null types must match.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type1` | **\GraphQL\Type\Definition\Type** |  |
| `$type2` | **\GraphQL\Type\Definition\Type** |  |




***

### findConflictsBetweenSubSelectionSets

Find all conflicts found between two selection sets, including those found
via spreading in fragments. Called when determining if conflicts exist
between the sub-fields of two overlapping fields.

```php
private findConflictsBetweenSubSelectionSets(\GraphQL\Validator\ValidationContext $context, bool $areMutuallyExclusive, \GraphQL\Type\Definition\CompositeType $parentType1, \GraphQL\Language\AST\SelectionSetNode $selectionSet1, \GraphQL\Type\Definition\CompositeType $parentType2, \GraphQL\Language\AST\SelectionSetNode $selectionSet2): array[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$areMutuallyExclusive` | **bool** |  |
| `$parentType1` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$selectionSet1` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$parentType2` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$selectionSet2` | **\GraphQL\Language\AST\SelectionSetNode** |  |




***

### collectConflictsBetween

Collect all Conflicts between two collections of fields. This is similar to,
but different from the `collectConflictsWithin` function above. This check
assumes that `collectConflictsWithin` has already been called on each
provided collection of fields. This is true because this validator traverses
each individual selection set.

```php
private collectConflictsBetween(\GraphQL\Validator\ValidationContext $context, array[]& $conflicts, bool $parentFieldsAreMutuallyExclusive, array $fieldMap1, array $fieldMap2): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$conflicts` | **array[]** |  |
| `$parentFieldsAreMutuallyExclusive` | **bool** |  |
| `$fieldMap1` | **array** |  |
| `$fieldMap2` | **array** |  |




***

### collectConflictsBetweenFieldsAndFragment

Collect all conflicts found between a set of fields and a fragment reference
including via spreading in any nested fragments.

```php
private collectConflictsBetweenFieldsAndFragment(\GraphQL\Validator\ValidationContext $context, array[]& $conflicts, bool[]& $comparedFragments, bool $areMutuallyExclusive, array[] $fieldMap, string $fragmentName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$conflicts` | **array[]** |  |
| `$comparedFragments` | **bool[]** |  |
| `$areMutuallyExclusive` | **bool** |  |
| `$fieldMap` | **array[]** |  |
| `$fragmentName` | **string** |  |




***

### getReferencedFieldsAndFragmentNames

Given a reference to a fragment, return the represented collection of fields
as well as a list of nested fragment names referenced via fragment spreads.

```php
private getReferencedFieldsAndFragmentNames(\GraphQL\Validator\ValidationContext $context, \GraphQL\Language\AST\FragmentDefinitionNode $fragment): array|\SplObjectStorage
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$fragment` | **\GraphQL\Language\AST\FragmentDefinitionNode** |  |




***

### collectConflictsBetweenFragments

Collect all conflicts found between two fragments, including via spreading in
any nested fragments.

```php
private collectConflictsBetweenFragments(\GraphQL\Validator\ValidationContext $context, array[]& $conflicts, bool $areMutuallyExclusive, string $fragmentName1, string $fragmentName2): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$conflicts` | **array[]** |  |
| `$areMutuallyExclusive` | **bool** |  |
| `$fragmentName1` | **string** |  |
| `$fragmentName2` | **string** |  |




***

### subfieldConflicts

Given a series of Conflicts which occurred between two sub-fields, generate
a single Conflict.

```php
private subfieldConflicts(array[] $conflicts, string $responseName, \GraphQL\Language\AST\FieldNode $ast1, \GraphQL\Language\AST\FieldNode $ast2): array|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conflicts` | **array[]** |  |
| `$responseName` | **string** |  |
| `$ast1` | **\GraphQL\Language\AST\FieldNode** |  |
| `$ast2` | **\GraphQL\Language\AST\FieldNode** |  |




***

### fieldsConflictMessage



```php
public static fieldsConflictMessage(string $responseName, string $reason): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$responseName` | **string** |  |
| `$reason` | **string** |  |




***

### reasonMessage



```php
public static reasonMessage(mixed $reason): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***


## Inherited methods


### getName



```php
public getName(): mixed
```











***

### __invoke



```php
public __invoke(\GraphQL\Validator\ValidationContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |




***

### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***

### getSDLVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\SDLValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***


***

