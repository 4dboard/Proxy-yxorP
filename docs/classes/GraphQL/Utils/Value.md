***

# Value

Coerces a PHP value given a GraphQL Type.

Returns either a value which is valid for the provided type or a list of
encountered coercion errors.

* Full name: `\GraphQL\Utils\Value`

## Methods

### coerceValue

Given a type and any value, return a runtime value coerced to match the type.

```php
public static coerceValue(mixed $value, \GraphQL\Type\Definition\ScalarType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\ListOfType|\GraphQL\Type\Definition\NonNull $type, mixed $blameNode = null, array $path = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$type` | **\GraphQL\Type\Definition\ScalarType&#124;\GraphQL\Type\Definition\EnumType&#124;\GraphQL\Type\Definition\InputObjectType&#124;\GraphQL\Type\Definition\ListOfType&#124;\GraphQL\Type\Definition\NonNull** |  |
| `$blameNode` | **mixed** |  |
| `$path` | **array** |  |

***

### ofErrors

```php
private static ofErrors(mixed $errors): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **mixed** |  |

***

### coercionError

```php
private static coercionError(string $message, \GraphQL\Language\AST\Node $blameNode, array|null $path = null, string $subMessage = null, \Exception|\Throwable|null $originalError = null): \GraphQL\Error\Error
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$blameNode` | **\GraphQL\Language\AST\Node** |  |
| `$path` | **array&#124;null** |  |
| `$subMessage` | **string** |  |
| `$originalError` | **\Exception&#124;\Throwable&#124;null** |  |

***

### printPath

Build a string describing the path into the value where the error was found

```php
private static printPath(array|null $path = null): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **array&#124;null** |  |

***

### ofValue

```php
private static ofValue(mixed $value): (mixed|null)[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### atPath

```php
private static atPath(mixed|null $prev, mixed|null $key): (mixed|null)[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prev` | **mixed&#124;null** |  |
| `$key` | **mixed&#124;null** |  |

***

### add

```php
private static add(\GraphQL\Error\Error[] $errors, \GraphQL\Error\Error|\GraphQL\Error\Error[] $moreErrors): \GraphQL\Error\Error[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **\GraphQL\Error\Error[]** |  |
| `$moreErrors` | **\GraphQL\Error\Error&#124;\GraphQL\Error\Error[]** |  |

***


***

