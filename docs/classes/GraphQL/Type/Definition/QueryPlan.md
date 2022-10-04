***

# QueryPlan

* Full name: `\GraphQL\Type\Definition\QueryPlan`

## Properties

### types

```php
private string[][] $types
```

***

### schema

```php
private \GraphQL\Type\Schema $schema
```

***

### queryPlan

```php
private array&lt;string,mixed&gt; $queryPlan
```

***

### variableValues

```php
private array $variableValues
```

***

### fragments

```php
private \GraphQL\Language\AST\FragmentDefinitionNode[] $fragments
```

***

### groupImplementorFields

```php
private bool $groupImplementorFields
```

***

## Methods

### __construct

```php
public __construct(\GraphQL\Type\Definition\ObjectType $parentType, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\FieldNode[] $fieldNodes, array $variableValues, \GraphQL\Language\AST\FragmentDefinitionNode[] $fragments, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$fieldNodes` | **\GraphQL\Language\AST\FieldNode[]** |  |
| `$variableValues` | **array** |  |
| `$fragments` | **\GraphQL\Language\AST\FragmentDefinitionNode[]** |  |
| `$options` | **array** |  |

***

### queryPlan

```php
public queryPlan(): array
```

***

### getReferencedTypes

```php
public getReferencedTypes(): string[]
```

***

### hasType

```php
public hasType(string $type): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |

***

### getReferencedFields

```php
public getReferencedFields(): string[]
```

***

### hasField

```php
public hasField(string $field): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** |  |

***

### subFields

```php
public subFields(string $typename): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typename` | **string** |  |

***

### analyzeQueryPlan

```php
private analyzeQueryPlan(\GraphQL\Type\Definition\ObjectType $parentType, \GraphQL\Language\AST\FieldNode[] $fieldNodes): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$fieldNodes` | **\GraphQL\Language\AST\FieldNode[]** |  |

***

### analyzeSelectionSet

```php
private analyzeSelectionSet(\GraphQL\Language\AST\SelectionSetNode $selectionSet, \GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\ObjectType $parentType, array& $implementors): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$parentType` | **\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\ObjectType** |  |
| `$implementors` | **array** |  |

***

### analyzeSubFields

```php
private analyzeSubFields(\GraphQL\Type\Definition\Type $type, \GraphQL\Language\AST\SelectionSetNode $selectionSet, array& $implementors = []): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$implementors` | **array** |  |

***

### mergeFields

```php
private mergeFields(\GraphQL\Type\Definition\Type $parentType, \GraphQL\Type\Definition\Type $type, array $fields, array $subfields, array& $implementors): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\Type** |  |
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$fields` | **array** |  |
| `$subfields` | **array** |  |
| `$implementors` | **array** |  |

***

### arrayMergeDeep

similar to array_merge_recursive this merges nested arrays, but handles non array values differently
while array_merge_recursive tries to merge non array values, in this implementation they will be overwritten

```php
private arrayMergeDeep(array $array1, array $array2): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array1` | **array** |  |
| `$array2` | **array** |  |

**See Also:**

* https://stackoverflow.com/a/25712428 -

***


***

