***

# StreamOutput

StreamOutput writes the output to a given stream.

Usage:

    $output = new StreamOutput(fopen('php://stdout', 'w'));

As `StreamOutput` can use any stream, you can also use a file:

    $output = new StreamOutput(fopen('/path/to/output.log', 'a', false));

* Full name: `\Symfony\Component\Console\Output\StreamOutput`
* Parent class: [`\Symfony\Component\Console\Output\Output`](./Output.md)

## Properties

### stream

```php
private $stream
```

***

## Methods

### __construct

```php
public __construct(resource $stream, int $verbosity = self::VERBOSITY_NORMAL, bool|null $decorated = null, \Symfony\Component\Console\Formatter\OutputFormatterInterface|null $formatter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** | A stream resource |
| `$verbosity` | **int** | The verbosity level (one of the VERBOSITY constants in OutputInterface) |
| `$decorated` | **bool&#124;null** | Whether to decorate messages (null for auto-guessing) |
| `$formatter` | **
\Symfony\Component\Console\Formatter\OutputFormatterInterface&#124;null** | Output formatter instance (null to use default OutputFormatter) |

***

### getStream

Gets the stream attached to this StreamOutput instance.

```php
public getStream(): resource
```

**Return Value:**

A stream resource



***

### doWrite

Writes a message to the output.

```php
protected doWrite(mixed $message, mixed $newline): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** | A message to write to the output |
| `$newline` | **mixed** | Whether to add a newline or not |

***

### hasColorSupport

Returns true if the stream supports colorization.

```php
protected hasColorSupport(): bool
```

Colorization is disabled if not supported by the stream:

This is tricky on Windows, because Cygwin, Msys2 etc emulate pseudo terminals via named pipes, so we can only check the
environment.

Reference: Composer\XdebugHandler\Process::supportsColor
https://github.com/composer/xdebug-handler

**Return Value:**

true if the stream supports colorization, false otherwise



***

## Inherited methods

### __construct

```php
public __construct(int $verbosity = self::VERBOSITY_NORMAL, bool $decorated = false, \Symfony\Component\Console\Formatter\OutputFormatterInterface|null $formatter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$verbosity` | **int** | The verbosity level (one of the VERBOSITY constants in OutputInterface) |
| `$decorated` | **bool** | Whether to decorate messages |
| `$formatter` | **
\Symfony\Component\Console\Formatter\OutputFormatterInterface&#124;null** | Output formatter instance (null to use default OutputFormatter) |

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
| `$options` | **
mixed** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |

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
| `$options` | **
mixed** | A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL &amp;#124; self::VERBOSITY_NORMAL |

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
| `$message` | **string** | A message to write to the output |
| `$newline` | **bool** | Whether to add a newline or not |

yxorP::get('REQUEST')
