***

# ArrayInput

ArrayInput represents an input provided as an array.

Usage:

$input = new ArrayInput(['command' => 'foo:bar', 'foo' => 'bar', '--bar' => 'foobar']);

* Full name: `\Symfony\Component\Console\Input\ArrayInput`
* Parent class: [`\Symfony\Component\Console\Input\Input`](./Input.md)



## Properties


### parameters



```php
private $parameters
```






***

## Methods


### __construct



```php
public __construct(array $parameters, \Symfony\Component\Console\Input\InputDefinition $definition = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **array** |  |
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |




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

### parse

Processes command line arguments.

```php
protected parse(): mixed
```











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

### addArgument

Adds an argument value.

```php
private addArgument(string|int $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** | The argument name |
| `$value` | **mixed** | The value for the argument |




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

