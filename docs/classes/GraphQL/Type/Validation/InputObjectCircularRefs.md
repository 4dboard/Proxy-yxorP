***

# InputObjectCircularRefs





* Full name: `\GraphQL\Type\Validation\InputObjectCircularRefs`



## Properties


### schemaValidationContext



```php
private \GraphQL\Type\SchemaValidationContext $schemaValidationContext
```






***

### visitedTypes

Tracks already visited types to maintain O(N) and to ensure that cycles
are not redundantly reported.

```php
private array&lt;string,bool&gt; $visitedTypes
```






***

### fieldPath



```php
private \GraphQL\Type\Definition\InputObjectField[] $fieldPath
```






***

### fieldPathIndexByTypeName

Position in the type path.

```php
private int[] $fieldPathIndexByTypeName
```

[string $typeName => int $index]




***

## Methods


### __construct



```php
public __construct(\GraphQL\Type\SchemaValidationContext $schemaValidationContext): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaValidationContext` | **\GraphQL\Type\SchemaValidationContext** |  |




***

### validate

This does a straight-forward DFS to find cycles.

```php
public validate(\GraphQL\Type\Definition\InputObjectType $inputObj): void
```

It does not terminate when a cycle was found but continues to explore
the graph to find all possible cycles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputObj` | **\GraphQL\Type\Definition\InputObjectType** |  |




***


***

