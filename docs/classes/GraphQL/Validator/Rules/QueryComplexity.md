***

# QueryComplexity

* Full name: `\GraphQL\Validator\Rules\QueryComplexity`
* Parent class: [`\GraphQL\Validator\Rules\QuerySecurityRule`](./QuerySecurityRule.md)

## Properties

### maxQueryComplexity

```php
private int $maxQueryComplexity
```

***

### rawVariableValues

```php
private array|null $rawVariableValues
```

***

### variableDefs

```php
private \ArrayObject $variableDefs
```

***

### fieldNodeAndDefs

```php
private \ArrayObject $fieldNodeAndDefs
```

***

### context

```php
private \GraphQL\Validator\ValidationContext $context
```

***

### complexity

```php
private int $complexity
```

***

## Methods

### __construct

```php
public __construct(mixed $maxQueryComplexity): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxQueryComplexity` | **mixed** |  |

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

### fieldComplexity

```php
private fieldComplexity(mixed $node, mixed $complexity): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |
| `$complexity` | **mixed** |  |

***

### nodeComplexity

```php
private nodeComplexity(\GraphQL\Language\AST\Node $node, mixed $complexity): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |
| `$complexity` | **mixed** |  |

***

### astFieldInfo

```php
private astFieldInfo(\GraphQL\Language\AST\FieldNode $field): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **\GraphQL\Language\AST\FieldNode** |  |

***

### directiveExcludesField

```php
private directiveExcludesField(\GraphQL\Language\AST\FieldNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\FieldNode** |  |

***

### getRawVariableValues

```php
public getRawVariableValues(): mixed
```

***

### setRawVariableValues

```php
public setRawVariableValues(array|null $rawVariableValues = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawVariableValues` | **array&#124;null** |  |

***

### buildFieldArguments

```php
private buildFieldArguments(\GraphQL\Language\AST\FieldNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\FieldNode** |  |

***

### getQueryComplexity

```php
public getQueryComplexity(): mixed
```

***

### getMaxQueryComplexity

```php
public getMaxQueryComplexity(): mixed
```

***

### setMaxQueryComplexity

Set max query complexity. If equal to 0 no check is done. Must be greater or equal to 0.

```php
public setMaxQueryComplexity(mixed $maxQueryComplexity): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxQueryComplexity` | **mixed** |  |

***

### maxQueryComplexityErrorMessage

```php
public static maxQueryComplexityErrorMessage(mixed $max, mixed $count): mixed
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

