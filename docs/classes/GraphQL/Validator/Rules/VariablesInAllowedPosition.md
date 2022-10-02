***

# VariablesInAllowedPosition

* Full name: `\GraphQL\Validator\Rules\VariablesInAllowedPosition`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)

## Properties

### varDefMap

A map from variable names to their definition nodes.

```php
public \GraphQL\Language\AST\VariableDefinitionNode[] $varDefMap
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

### badVarPosMessage

A var type is allowed if it is the same or more strict than the expected
type. It can be more strict if the variable type is non-null when the
expected type is nullable. If both are list types, the variable item type can
be more strict than the expected item type.

```php
public static badVarPosMessage(mixed $varName, mixed $varType, mixed $expectedType): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$varName` | **mixed** |  |
| `$varType` | **mixed** |  |
| `$expectedType` | **mixed** |  |

***

### allowedVariableUsage

Returns true if the variable is allowed in the location it was found,
which includes considering if default values exist for either the variable
or the location at which it is located.

```php
private allowedVariableUsage(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $varType, \GraphQL\Language\AST\ValueNode|null $varDefaultValue, \GraphQL\Type\Definition\Type $locationType, mixed $locationDefaultValue): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$varType` | **\GraphQL\Type\Definition\Type** |  |
| `$varDefaultValue` | **\GraphQL\Language\AST\ValueNode&#124;null** |  |
| `$locationType` | **\GraphQL\Type\Definition\Type** |  |
| `$locationDefaultValue` | **mixed** |  |

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

