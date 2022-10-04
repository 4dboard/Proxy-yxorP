***

# ArgvInput

ArgvInput represents an input coming from the CLI arguments.

Usage:

    $input = new ArgvInput();

By default, the `$_SERVER['argv']` array is used for the input values.

This can be overridden by explicitly passing the input values in the constructor:

    $input = new ArgvInput($_SERVER['argv']);

If you pass it yourself, don't forget that the first element of the array
is the name of the running application.

When passing an argument to the constructor, be sure that it respects
the same rules as the argv one. It's almost always better to use the
`StringInput` when you want to provide your own input.

* Full name: `\Symfony\Component\Console\Input\ArgvInput`
* Parent class: [`\Symfony\Component\Console\Input\Input`](./Input.md)

**See Also:**

* http://www.gnu.org/software/libc/manual/html_node/Argument-Syntax.html -
* http://www.opengroup.org/onlinepubs/009695399/basedefs/xbd_chap12.html#tag_12_02 -

## Properties

### tokens

```php
private $tokens
```

***

### parsed

```php
private $parsed
```

***

## Methods

### __construct

```php
public __construct(array $argv = null, \Symfony\Component\Console\Input\InputDefinition $definition = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argv` | **array** |  |
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

