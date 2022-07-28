***

# OutputStyle

Decorates output to add console style guide helpers.



* Full name: `\Symfony\Component\Console\Style\OutputStyle`
* This class implements:
[`\Symfony\Component\Console\Output\OutputInterface`](../Output/OutputInterface.md), [`\Symfony\Component\Console\Style\StyleInterface`](./StyleInterface.md)
* This class is an **Abstract class**



## Properties


### output



```php
private $output
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




***

### newLine

Add newline(s).

```php
public newLine(int $count = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |




***

### createProgressBar



```php
public createProgressBar(int $max): \Symfony\Component\Console\Helper\ProgressBar
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** |  |




***

### write

Writes a message to the output.

```php
public write(mixed $messages, bool $newline = false, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$newline` | **bool** | Whether to add a newline |
| `$type` | **int** |  |




***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$type` | **int** |  |




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

### getErrorOutput



```php
protected getErrorOutput(): mixed
```











***


***

