***

# NoFragmentCycles

* Full name: `\GraphQL\Validator\Rules\NoFragmentCycles`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)

## Properties

### visitedFrags

```php
public bool[] $visitedFrags
```

***

### spreadPath

```php
public \GraphQL\Language\AST\FragmentSpreadNode[] $spreadPath
```

***

### spreadPathIndexByName

```php
public (int|null)[] $spreadPathIndexByName
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

### detectCycleRecursive

```php
private detectCycleRecursive(\GraphQL\Language\AST\FragmentDefinitionNode $fragment, \GraphQL\Validator\ValidationContext $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragment` | **\GraphQL\Language\AST\FragmentDefinitionNode** |  |
| `$context` | **\GraphQL\Validator\ValidationContext** |  |

***

### cycleErrorMessage

```php
public static cycleErrorMessage(mixed $fragName, string[] $spreadNames = []): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragName` | **mixed** |  |
| `$spreadNames` | **string[]** |  |

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

