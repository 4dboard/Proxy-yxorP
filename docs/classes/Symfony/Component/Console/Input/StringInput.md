***

# StringInput

StringInput represents an input provided as a string.

Usage:

$input = new StringInput('foo --bar="foobar"');

* Full name: `\Symfony\Component\Console\Input\StringInput`
* Parent class: [`\Symfony\Component\Console\Input\ArgvInput`](./ArgvInput.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REGEX_STRING`|public| |&#039;([^\\s]+?)(?:\\s|(?&lt;!\\\\)&quot;|(?&lt;!\\\\)\&#039;|$)&#039;|
|`REGEX_UNQUOTED_STRING`|public| |&#039;([^\\s\\\\]+?)&#039;|
|`REGEX_QUOTED_STRING`|public| |&#039;(?:&quot;([^&quot;\\\\]*(?:\\\\.[^&quot;\\\\]*)*)&quot;|\&#039;([^\&#039;\\\\]*(?:\\\\.[^\&#039;\\\\]*)*)\&#039;)&#039;|

## Methods

### __construct

```php
public __construct(string $input): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A string representing the parameters from the CLI |

***

### tokenize

Tokenizes a string.

```php
private tokenize(string $input): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** |  |

***

## Inherited methods

### __construct

```php
public __construct(\Symfony\Component\Console\Input\InputDefinition $definition = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |

***

### setTokens

```php
protected setTokens(array $tokens): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### parse

Processes command line arguments.

```php
protected parse(): mixed
```

* This method is **abstract**.

***

### parseToken

```php
protected parseToken(string $token, bool $parseOptions): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |
| `$parseOptions` | **bool** |  |

***

### parseShortOption

Parses a short option.

```php
private parseShortOption(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |

***

### parseShortOptionSet

Parses a short option set.

```php
private parseShortOptionSet(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### parseLongOption

Parses a long option.

```php
private parseLongOption(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |

***

### parseArgument

Parses an argument.

```php
private parseArgument(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |

***

### addShortOption

Adds a short option value.

```php
private addShortOption(string $shortcut, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shortcut` | **string** |  |
| `$value` | **mixed** |  |

***

### addLongOption

Adds a long option value.

```php
private addLongOption(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |

***

### getFirstArgument

{@inheritdoc}

```php
public getFirstArgument(): mixed
```

***

### hasParameterOption

{@inheritdoc}

```php
public hasParameterOption(mixed $values, bool $onlyParams = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |
| `$onlyParams` | **bool** |  |

***

### getParameterOption

{@inheritdoc}

```php
public getParameterOption(mixed $values, mixed $default = false, bool $onlyParams = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |
| `$default` | **mixed** |  |
| `$onlyParams` | **bool** |  |

***

### __toString

Returns a stringified representation of the args passed to the command.

```php
public __toString(): string
```

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

