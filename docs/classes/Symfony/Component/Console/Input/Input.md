***

# Input

Input is the base class for all concrete Input classes.

Three concrete classes are provided by default:

* `ArgvInput`: The input comes from the CLI arguments (argv)
* `StringInput`: The input is provided as a string
* `ArrayInput`: The input is provided as an array

* Full name: `\Symfony\Component\Console\Input\Input`
* This class implements:
  [`\Symfony\Component\Console\Input\InputInterface`](./InputInterface.md)
  , [`\Symfony\Component\Console\Input\StreamableInputInterface`](./StreamableInputInterface.md)
* This class is an **Abstract class**

## Properties

### definition

```php
protected $definition
```

***

### stream

```php
protected $stream
```

***

### options

```php
protected $options
```

***

### arguments

```php
protected $arguments
```

***

### interactive

```php
protected $interactive
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Input\InputDefinition $definition = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |

***

### bind

Binds the current Input instance with the given arguments and options.

```php
public bind(\Symfony\Component\Console\Input\InputDefinition $definition): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |

***

### parse

Processes command line arguments.

```php
protected parse(): mixed
```

* This method is **abstract**.

***

### validate

Validates the input.

```php
public validate(): mixed
```

***

### isInteractive

Is this input means interactive?

```php
public isInteractive(): bool
```

***

### setInteractive

Sets the input interactivity.

```php
public setInteractive(bool $interactive): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interactive` | **bool** |  |

***

### getArguments

Returns all the given arguments merged with the default values.

```php
public getArguments(): (string|bool|int|float|array|null)[]
```

***

### getArgument

Returns the argument value for a given argument name.

```php
public getArgument(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### setArgument

Sets an argument value by name.

```php
public setArgument(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** | The argument value |

***

### hasArgument

Returns true if an InputArgument object exists by name or position.

```php
public hasArgument(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getOptions

Returns all the given options merged with the default values.

```php
public getOptions(): (string|bool|int|float|array|null)[]
```

***

### getOption

Returns the option value for a given option name.

```php
public getOption(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### setOption

Sets an option value by name.

```php
public setOption(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** | The option value |

***

### hasOption

Returns true if an InputOption object exists by name.

```php
public hasOption(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### escapeToken

Escapes a token through escapeshellarg if it contains unsafe chars.

```php
public escapeToken(string $token): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |

***

### setStream

Sets the input stream to read from when interacting with the user.

```php
public setStream(mixed $stream): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** | The input stream |

***

### getStream

Returns the input stream.

```php
public getStream(): resource|null
```

***


***

