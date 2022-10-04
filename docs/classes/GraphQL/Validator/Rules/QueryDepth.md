***

# QueryDepth

* Full name: `\GraphQL\Validator\Rules\QueryDepth`
* Parent class: [`\GraphQL\Validator\Rules\QuerySecurityRule`](./QuerySecurityRule.md)

## Properties

### maxQueryDepth

```php
private int $maxQueryDepth
```

***

## Methods

### __construct

```php
public __construct(mixed $maxQueryDepth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxQueryDepth` | **mixed** |  |

***

### getVisitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |

***

### fieldDepth

```php
private fieldDepth(mixed $node, mixed $depth, mixed $maxDepth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |
| `$depth` | **mixed** |  |
| `$maxDepth` | **mixed** |  |

***

### nodeDepth

```php
private nodeDepth(\GraphQL\Language\AST\Node $node, mixed $depth, mixed $maxDepth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |
| `$depth` | **mixed** |  |
| `$maxDepth` | **mixed** |  |

***

### getMaxQueryDepth

```php
public getMaxQueryDepth(): mixed
```

***

### setMaxQueryDepth

Set max query depth. If equal to 0 no check is done. Must be greater or equal to 0.

```php
public setMaxQueryDepth(mixed $maxQueryDepth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxQueryDepth` | **mixed** |  |

***

### maxQueryDepthErrorMessage

```php
public static maxQueryDepthErrorMessage(mixed $max, mixed $count): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **mixed** |  |
| `$count` | **mixed** |  |

***

### isEnabled

```php
protected isEnabled(): mixed
```

***

## Inherited methods

### checkIfGreaterOrEqualToZero

check if equal to 0 no check is done. Must be greater or equal to 0.

```php
protected checkIfGreaterOrEqualToZero(string $name, int $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **int** |  |

***

### getFragment

```php
protected getFragment(\GraphQL\Language\AST\FragmentSpreadNode $fragmentSpread): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragmentSpread` | **\GraphQL\Language\AST\FragmentSpreadNode** |  |

***

### getFragments

```php
protected getFragments(): \GraphQL\Language\AST\FragmentDefinitionNode[]
```

***

### invokeIfNeeded

```php
protected invokeIfNeeded(\GraphQL\Validator\ValidationContext $context, callable[] $validators): callable[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$validators` | **callable[]** |  |

***

### isEnabled

```php
protected isEnabled(): mixed
```

* This method is **abstract**.

***

### gatherFragmentDefinition

```php
protected gatherFragmentDefinition(\GraphQL\Validator\ValidationContext $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |

***

### collectFieldASTsAndDefs

Given a selectionSet, adds all of the fields in that selection to
the passed in map of fields, and returns it at the end.

```php
protected collectFieldASTsAndDefs(\GraphQL\Validator\ValidationContext $context, \GraphQL\Type\Definition\Type|null $parentType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, ?\ArrayObject $visitedFragmentNames = null, ?\ArrayObject $astAndDefs = null): \ArrayObject
```

Note: This is not the same as execution's collectFields because at static
time we do not know what object type will be used, so we unconditionally
spread in all fragments.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$parentType` | **\GraphQL\Type\Definition\Type&#124;null** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$visitedFragmentNames` | **?\ArrayObject** |  |
| `$astAndDefs` | **?\ArrayObject** |  |

**See Also:**

* \GraphQL\Validator\Rules\OverlappingFieldsCanBeMerged -

***

### getFieldName

```php
protected getFieldName(\GraphQL\Language\AST\FieldNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\FieldNode** |  |

***

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

