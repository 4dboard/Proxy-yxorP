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
|`REGEX_QUOTED_STRING`|public| |&#039;(?:&quot;([^&quot;\\\\]*(?:
\\\\.[^&quot;\\\\]*)*)&quot;|\&#039;([^\&#039;\\\\]*(?:\\\\.[^\&#039;\\\\]*)*)\&#039;)&#039;|

## Methods

### __construct

```php
public __construct(string $input, \Symfony\Component\Console\Input\InputDefinition $definition = null): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A string representing the parameters from the CLI |
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** | A InputDefinition instance |

***

### tokenize

Tokenizes a string.

```php
private tokenize(string $input): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | The input to tokenize |

**Return Value:**

An array of tokens



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

### parseShortOption

Parses a short option.

```php
private parseShortOption(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | The current token |

***

### parseShortOptionSet

Parses a short option set.

```php
private parseShortOptionSet(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The current token |

***

### parseLongOption

Parses a long option.

```php
private parseLongOption(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | The current token |

***

### parseArgument

Parses an argument.

```php
private parseArgument(string $token): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | The current token |

***

### addShortOption

Adds a short option value.

```php
private addShortOption(string $shortcut, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shortcut` | **string** | The short option key |
| `$value` | **mixed** | The value for the option |

***

### addLongOption

Adds a long option value.

```php
private addLongOption(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The long option key |
| `$value` | **mixed** | The value for the option |

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
public hasParameterOption(mixed $values): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |

***

### getParameterOption

{@inheritdoc}

```php
public getParameterOption(mixed $values, mixed $default = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |
| `$default` | **mixed** |  |

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
public setInteractive(mixed $interactive): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interactive` | **mixed** | If the input should be interactive |

***

### getArguments

Returns all the given arguments merged with the default values.

```php
public getArguments(): array
```

***

### getArgument

Returns the argument value for a given argument name.

```php
public getArgument(mixed $name): string|string[]|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The argument name |

**Return Value:**

The argument value



***

### setArgument

Sets an argument value by name.

```php
public setArgument(mixed $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The argument name |
| `$value` | **mixed** | The argument value |

***

### hasArgument

Returns true if an InputArgument object exists by name or position.

```php
public hasArgument(mixed $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The InputArgument name or position |

**Return Value:**

true if the InputArgument object exists, false otherwise



***

### getOptions

Returns all the given options merged with the default values.

```php
public getOptions(): array
```

***

### getOption

Returns the option value for a given option name.

```php
public getOption(mixed $name): string|string[]|bool|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The option name |

**Return Value:**

The option value



***

### setOption

Sets an option value by name.

```php
public setOption(mixed $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The option name |
| `$value` | **mixed** | The option value |

***

### hasOption

Returns true if an InputOption object exists by name.

```php
public hasOption(mixed $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The InputOption name |

**Return Value:**

true if the InputOption object exists, false otherwise



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

yxorP::get('REQUEST')
