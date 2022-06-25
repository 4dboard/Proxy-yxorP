***

# NullOutput

NullOutput suppresses all output.

$output = new NullOutput();

* Full name: `\Symfony\Component\Console\Output\NullOutput`
* This class implements:
[`\Symfony\Component\Console\Output\OutputInterface`](./OutputInterface.md)




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
public setDecorated(mixed $decorated): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **mixed** | Whether to decorate the messages |




***

### isDecorated

Gets the decorated flag.

```php
public isDecorated(): bool
```









**Return Value:**

true if the output will decorate messages, false otherwise



***

### setVerbosity

Sets the verbosity of the output.

```php
public setVerbosity(mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** | The level of verbosity (one of the VERBOSITY constants) |




***

### getVerbosity

Gets the current verbosity of the output.

```php
public getVerbosity(): int
```









**Return Value:**

The current level of verbosity (one of the VERBOSITY constants)



***

### isQuiet

{@inheritdoc}

```php
public isQuiet(): mixed
```











***

### isVerbose

{@inheritdoc}

```php
public isVerbose(): mixed
```











***

### isVeryVerbose

{@inheritdoc}

```php
public isVeryVerbose(): mixed
```











***

### isDebug

{@inheritdoc}

```php
public isDebug(): mixed
```











***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, mixed $options = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an array of strings or a single string |
| `$options` | **mixed** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |




***

### write

Writes a message to the output.

```php
public write(mixed $messages, mixed $newline = false, mixed $options = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an array of strings or a single string |
| `$newline` | **mixed** | Whether to add a newline |
| `$options` | **mixed** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
