***

# ResolveInfo

Structure containing information useful for field resolution process.

Passed as 4th argument to every field resolver. See [docs on field resolving (data fetching)](data-fetching.md).

* Full name: `\GraphQL\Type\Definition\ResolveInfo`



## Properties


### fieldDefinition

The definition of the field being resolved.

```php
public \GraphQL\Type\Definition\FieldDefinition $fieldDefinition
```






***

### fieldName

The name of the field being resolved.

```php
public string $fieldName
```






***

### returnType

Expected return type of the field being resolved.

```php
public \GraphQL\Type\Definition\Type $returnType
```






***

### fieldNodes

AST of all nodes referencing this field in the query.

```php
public \GraphQL\Language\AST\FieldNode[] $fieldNodes
```






***

### parentType

Parent type of the field being resolved.

```php
public \GraphQL\Type\Definition\ObjectType $parentType
```






***

### path

Path to this field from the very root value.

```php
public string[] $path
```






***

### schema

Instance of a schema used for execution.

```php
public \GraphQL\Type\Schema $schema
```






***

### fragments

AST of all fragments defined in query.

```php
public \GraphQL\Language\AST\FragmentDefinitionNode[] $fragments
```






***

### rootValue

Root value passed to query execution.

```php
public mixed $rootValue
```






***

### operation

AST of operation definition node (query, mutation).

```php
public \GraphQL\Language\AST\OperationDefinitionNode|null $operation
```






***

### variableValues

Array of variables passed to query execution.

```php
public array $variableValues
```






***

### queryPlan

Lazily initialized.

```php
private \GraphQL\Type\Definition\QueryPlan $queryPlan
```






***

## Methods


### __construct



```php
public __construct(\GraphQL\Type\Definition\FieldDefinition $fieldDefinition, \GraphQL\Language\AST\FieldNode[] $fieldNodes, \GraphQL\Type\Definition\ObjectType $parentType, string[] $path, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\FragmentDefinitionNode[] $fragments, mixed|null $rootValue, ?\GraphQL\Language\AST\OperationDefinitionNode $operation, array $variableValues): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldDefinition` | **\GraphQL\Type\Definition\FieldDefinition** |  |
| `$fieldNodes` | **\GraphQL\Language\AST\FieldNode[]** |  |
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$path` | **string[]** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$fragments` | **\GraphQL\Language\AST\FragmentDefinitionNode[]** |  |
| `$rootValue` | **mixed&#124;null** |  |
| `$operation` | **?\GraphQL\Language\AST\OperationDefinitionNode** |  |
| `$variableValues` | **array** |  |




***

### getFieldSelection

Helper method that returns names of all fields selected in query for
$this->fieldName up to $depth levels.

```php
public getFieldSelection(int $depth): array&lt;string,mixed&gt;
```

Example:
query MyQuery{
{
  root {
    id,
    nested {
     nested1
     nested2 {
       nested3
     }
    }
  }
}

Given this ResolveInfo instance is a part of "root" field resolution, and $depth === 1,
method will return:
[
    'id' => true,
    'nested' => [
        nested1 => true,
        nested2 => true
    ]
]

Warning: this method it is a naive implementation which does not take into account
conditional typed fragments. So use it with care for fields of interface and union types.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$depth` | **int** | How many levels to include in output |




***

### lookAhead



```php
public lookAhead(array $options = []): \GraphQL\Type\Definition\QueryPlan
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### foldSelectionSet



```php
private foldSelectionSet(\GraphQL\Language\AST\SelectionSetNode $selectionSet, int $descend): bool[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$descend` | **int** |  |




***


***

