***

# NullOutput

NullOutput suppresses all output.

$output = new NullOutput();

* Full name: `\Symfony\Component\Console\Output\NullOutput`
* This class implements:
[`\Symfony\Component\Console\Output\OutputInterface`](./OutputInterface.md)



## Properties


### formatter



```php
private $formatter
```






***

## Methods


### setFormatter



```php
public setFormatter(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |




***

### getFormatter

Returns current output formatter instance.

```php
public getFormatter(): \Symfony\Component\Console\Formatter\OutputFormatterInterface
```











***

### setDecorated

Sets the decorated flag.

```php
public setDecorated(bool $decorated): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** |  |




***

### isDecorated

Gets the decorated flag.

```php
public isDecorated(): bool
```











***

### setVerbosity

Sets the verbosity of the output.

```php
public setVerbosity(int $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |




***

### getVerbosity

Gets the current verbosity of the output.

```php
public getVerbosity(): int
```











***

### isQuiet

Returns whether verbosity is quiet (-q).

```php
public isQuiet(): bool
```











***

### isVerbose

Returns whether verbosity is verbose (-v).

```php
public isVerbose(): bool
```











***

### isVeryVerbose

Returns whether verbosity is very verbose (-vv).

```php
public isVeryVerbose(): bool
```











***

### isDebug

Returns whether verbosity is debug (-vvv).

```php
public isDebug(): bool
```











***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, int $options = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$options` | **int** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |




***

### write

Writes a message to the output.

```php
public write(mixed $messages, bool $newline = false, int $options = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$newline` | **bool** | Whether to add a newline |
| `$options` | **int** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |




***


***

