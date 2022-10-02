***

# ValuesOfCorrectType

Value literals of correct type

A GraphQL document is only valid if all value literals are of the type
expected at their position.

* Full name: `\GraphQL\Validator\Rules\ValuesOfCorrectType`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)

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

### badValueMessage

```php
public static badValueMessage(mixed $typeName, mixed $valueName, mixed $message = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **mixed** |  |
| `$valueName` | **mixed** |  |
| `$message` | **mixed** |  |

***

### isValidScalar

```php
private isValidScalar(\GraphQL\Validator\ValidationContext $context, \GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\NullValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode $node, mixed $fieldName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$node` | **\GraphQL\Language\AST\VariableNode&#124;\GraphQL\Language\AST\NullValueNode&#124;\GraphQL\Language\AST\IntValueNode&#124;\GraphQL\Language\AST\FloatValueNode&#124;\GraphQL\Language\AST\StringValueNode&#124;\GraphQL\Language\AST\BooleanValueNode&#124;\GraphQL\Language\AST\EnumValueNode&#124;\GraphQL\Language\AST\ListValueNode&#124;\GraphQL\Language\AST\ObjectValueNode** |  |
| `$fieldName` | **mixed** |  |

***

### enumTypeSuggestion

```php
private enumTypeSuggestion(mixed $type, \GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\NullValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$node` | **\GraphQL\Language\AST\VariableNode&#124;\GraphQL\Language\AST\NullValueNode&#124;\GraphQL\Language\AST\IntValueNode&#124;\GraphQL\Language\AST\FloatValueNode&#124;\GraphQL\Language\AST\StringValueNode&#124;\GraphQL\Language\AST\BooleanValueNode&#124;\GraphQL\Language\AST\EnumValueNode&#124;\GraphQL\Language\AST\ListValueNode&#124;\GraphQL\Language\AST\ObjectValueNode** |  |

***

### badArgumentValueMessage

```php
public static badArgumentValueMessage(mixed $typeName, mixed $valueName, mixed $fieldName, mixed $argName, mixed $message = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **mixed** |  |
| `$valueName` | **mixed** |  |
| `$fieldName` | **mixed** |  |
| `$argName` | **mixed** |  |
| `$message` | **mixed** |  |

***

### requiredFieldMessage

```php
public static requiredFieldMessage(mixed $typeName, mixed $fieldName, mixed $fieldTypeName): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **mixed** |  |
| `$fieldName` | **mixed** |  |
| `$fieldTypeName` | **mixed** |  |

***

### unknownFieldMessage

```php
public static unknownFieldMessage(mixed $typeName, mixed $fieldName, mixed $message = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **mixed** |  |
| `$fieldName` | **mixed** |  |
| `$message` | **mixed** |  |

***

### getBadValueMessage

```php
private static getBadValueMessage(mixed $typeName, mixed $valueName, mixed $message = null, mixed $context = null, mixed $fieldName = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **mixed** |  |
| `$valueName` | **mixed** |  |
| `$message` | **mixed** |  |
| `$context` | **mixed** |  |
| `$fieldName` | **mixed** |  |

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

