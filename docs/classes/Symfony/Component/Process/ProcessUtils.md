***

# ProcessUtils

ProcessUtils is a bunch of utility methods.

This class contains static methods only and is not meant to be instantiated.

* Full name: `\Symfony\Component\Process\ProcessUtils`

## Methods

### __construct

This class should not be instantiated.

```php
private __construct(): mixed
```

***

### escapeArgument

Escapes a string to be used as a shell argument.

```php
public static escapeArgument(string $argument): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argument` | **string** | The argument that will be escaped |

**Return Value:**

The escaped argument



***

### validateInput

Validates and normalizes a Process input.

```php
public static validateInput(string $caller, mixed $input): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$caller` | **string** | The name of method call that validates the input |
| `$input` | **mixed** | The input to validate |

**Return Value:**

The validated input



***

### isSurroundedBy

```php
private static isSurroundedBy(mixed $arg, mixed $char): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arg` | **mixed** |  |
| `$char` | **mixed** |  |

yxorP::get('REQUEST')
