***

# Output

A custom output class for our Console object that supports writing to the log.

* Full name: `\phpDocumentor\Console\Output\Output`
* Parent
  class: [`\Symfony\Component\Console\Output\ConsoleOutput`](../../../Symfony/Component/Console/Output/ConsoleOutput.md)

## Properties

### logger

```php
protected \Monolog\Logger $logger
```

***

## Methods

### setLogger

Sets a logger object to write information to.

```php
public setLogger(\Monolog\Logger $logger): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** |  |

***

### getLogger

Returns the object where is being logged to.

```php
public getLogger(): \Monolog\Logger
```

***

### writeTimedLog

Executes a callable piece of code and writes an entry to the log detailing how long it took.

```php
public writeTimedLog(string $message, callable $operation, array $arguments = array()): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$operation` | **callable** |  |
| `$arguments` | **array** |  |

***

### write

Write an entry to the console and to the provided logger.

```php
public write(array|string $message, bool $newline = false, int $type): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **array&#124;string** |  |
| `$newline` | **bool** |  |
| `$type` | **int** |  |

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

### setFormatter

```php
public setFormatter(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |

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

### getErrorOutput

Gets the OutputInterface for errors.

```php
public getErrorOutput(): \Symfony\Component\Console\Output\OutputInterface
```

***

### setErrorOutput

```php
public setErrorOutput(\Symfony\Component\Console\Output\OutputInterface $error): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### hasStdoutSupport

Returns true if current environment supports writing console output to STDOUT.

```php
protected hasStdoutSupport(): bool
```

***

### hasStderrSupport

Returns true if current environment supports writing console output to STDERR.

```php
protected hasStderrSupport(): bool
```

***

### isRunningOS400

Checks if current executing environment is IBM iSeries (OS400), which doesn't properly convert character-encodings
between ASCII to EBCDIC.

```php
private isRunningOS400(): bool
```

***

### openOutputStream

```php
private openOutputStream(): resource
```

***

### openErrorStream

```php
private openErrorStream(): resource
```

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
protected doWrite(string $message, bool $newline): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | A message to write to the output |
| `$newline` | **bool** | Whether to add a newline or not |

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

### getFormatter

Returns current output formatter instance.

```php
public getFormatter(): \Symfony\Component\Console\Formatter\OutputFormatterInterface
```

***

### isDecorated

Gets the decorated flag.

```php
public isDecorated(): bool
```

**Return Value:**

true if the output will decorate messages, false otherwise



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

yxorP::get('REQUEST')
