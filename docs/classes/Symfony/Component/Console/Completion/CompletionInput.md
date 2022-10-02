***

# CompletionInput

An input specialized for shell completion.

This input allows unfinished option names or values and exposes what kind of
completion is expected.

* Full name: `\Symfony\Component\Console\Completion\CompletionInput`
* Parent class: [`\Symfony\Component\Console\Input\ArgvInput`](../Input/ArgvInput.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_ARGUMENT_VALUE`|public| |&#039;argument_value&#039;|
|`TYPE_OPTION_VALUE`|public| |&#039;option_value&#039;|
|`TYPE_OPTION_NAME`|public| |&#039;option_name&#039;|
|`TYPE_NONE`|public| |&#039;none&#039;|

## Properties

### tokens

```php
private $tokens
```

***

### currentIndex

```php
private $currentIndex
```

***

### completionType

```php
private $completionType
```

***

### completionName

```php
private $completionName
```

***

### completionValue

```php
private $completionValue
```

***

## Methods

### fromString

Converts a terminal string into tokens.

```php
public static fromString(string $inputStr, int $currentIndex): self
```

This is required for shell completions without COMP_WORDS support.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputStr` | **string** |  |
| `$currentIndex` | **int** |  |

***

### fromTokens

Create an input based on an COMP_WORDS token list.

```php
public static fromTokens(string[] $tokens,  $currentIndex): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **string[]** | the set of split tokens (e.g. COMP_WORDS or argv) |
| `$currentIndex` | **** | the index of the cursor (e.g. COMP_CWORD) |

***

### bind

{@inheritdoc}

```php
public bind(\Symfony\Component\Console\Input\InputDefinition $definition): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |

***

### getCompletionType

Returns the type of completion required.

```php
public getCompletionType(): string
```

TYPE_ARGUMENT_VALUE when completing the value of an input argument
TYPE_OPTION_VALUE when completing the value of an input option
TYPE_OPTION_NAME when completing the name of an input option
TYPE_NONE when nothing should be completed

**Return Value:**

One of self::TYPE_* constants. TYPE_OPTION_NAME and TYPE_NONE are already implemented by the Console component



***

### getCompletionName

The name of the input option or argument when completing a value.

```php
public getCompletionName(): string|null
```

**Return Value:**

returns null when completing an option name



***

### getCompletionValue

The value already typed by the user (or empty string).

```php
public getCompletionValue(): string
```

***

### mustSuggestOptionValuesFor

```php
public mustSuggestOptionValuesFor(string $optionName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optionName` | **string** |  |

***

### mustSuggestArgumentValuesFor

```php
public mustSuggestArgumentValuesFor(string $argumentName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argumentName` | **string** |  |

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

### getOptionFromToken

```php
private getOptionFromToken(string $optionToken): ?\Symfony\Component\Console\Input\InputOption
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optionToken` | **string** |  |

***

### getRelevantToken

The token of the cursor, or the last token if the cursor is at the end of the input.

```php
private getRelevantToken(): string
```

***

### isCursorFree

Whether the cursor is "free" (i.e. at the end of the input preceded by a space).

```php
private isCursorFree(): bool
```

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

