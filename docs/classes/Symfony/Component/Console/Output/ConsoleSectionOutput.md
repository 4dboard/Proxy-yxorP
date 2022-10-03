***

# ConsoleSectionOutput

StreamOutput writes the output to a given stream.



* Full name: `\Symfony\Component\Console\Output\ConsoleSectionOutput`
* Parent class: [`\Symfony\Component\Console\Output\StreamOutput`](./StreamOutput.md)



## Properties


### content



```php
private $content
```






***

### lines



```php
private $lines
```






***

### sections



```php
private $sections
```






***

### terminal



```php
private $terminal
```






***

## Methods


### __construct



```php
public __construct(resource $stream, \Symfony\Component\Console\Output\ConsoleSectionOutput[]& $sections, int $verbosity, bool $decorated, \Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** |  |
| `$sections` | **\Symfony\Component\Console\Output\ConsoleSectionOutput[]** |  |
| `$verbosity` | **int** | The verbosity level (one of the VERBOSITY constants in OutputInterface) |
| `$decorated` | **bool** | Whether to decorate messages (null for auto-guessing) |
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** | Output formatter instance (null to use default OutputFormatter) |




***

### clear

Clears previous output for this section.

```php
public clear(int $lines = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **int** | Number of lines to clear. If null, then the entire output of this section is cleared |




***

### overwrite

Overwrites the previous output with a new message.

```php
public overwrite(array|string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **array&#124;string** |  |




***

### getContent



```php
public getContent(): string
```











***

### doWrite

Writes a message to the output.

```php
protected doWrite(string $message, bool $newline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$newline` | **bool** |  |




***

### popStreamContentUntilCurrentSection

At initial stage, cursor is at the end of stream output. This method makes cursor crawl upwards until it hits
current section. Then it erases content it crawled through. Optionally, it erases part of current section too.

```php
private popStreamContentUntilCurrentSection(int $numberOfLinesToClearFromCurrentSection): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numberOfLinesToClearFromCurrentSection` | **int** |  |




***

### getDisplayLength



```php
private getDisplayLength(string $text): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |




***


## Inherited methods


### __construct



```php
public __construct(int|null $verbosity = self::VERBOSITY_NORMAL, bool $decorated = false, \Symfony\Component\Console\Formatter\OutputFormatterInterface|null $formatter = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$verbosity` | **int&#124;null** | The verbosity level (one of the VERBOSITY constants in OutputInterface) |
| `$decorated` | **bool** | Whether to decorate messages |
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface&#124;null** | Output formatter instance (null to use default OutputFormatter) |




***

### getStream

Gets the stream attached to this StreamOutput instance.

```php
public getStream(): resource
```











***

### doWrite

Writes a message to the output.

```php
protected doWrite(string $message, bool $newline): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$newline` | **bool** |  |




***

### hasColorSupport

Returns true if the stream supports colorization.

```php
protected hasColorSupport(): bool
```

Colorization is disabled if not supported by the stream:

This is tricky on Windows, because Cygwin, Msys2 etc emulate pseudo
terminals via named pipes, so we can only check the environment.

Reference: Composer\XdebugHandler\Process::supportsColor
https://github.com/composer/xdebug-handler







**Return Value:**

true if the stream supports colorization, false otherwise



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

