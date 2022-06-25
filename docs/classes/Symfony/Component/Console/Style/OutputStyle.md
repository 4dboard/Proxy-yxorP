***

# OutputStyle

Decorates output to add console style guide helpers.

* Full name: `\Symfony\Component\Console\Style\OutputStyle`
* This class implements:
  [`\Symfony\Component\Console\Output\OutputInterface`](../Output/OutputInterface.md)
  , [`\Symfony\Component\Console\Style\StyleInterface`](./StyleInterface.md)
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
public newLine(mixed $count = 1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **mixed** | The number of newlines |

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
public write(mixed $messages, mixed $newline = false, mixed $type = self::OUTPUT_NORMAL): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an array of strings or a single string |
| `$newline` | **mixed** | Whether to add a newline |
| `$type` | **mixed** |  |

***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, mixed $type = self::OUTPUT_NORMAL): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an array of strings or a single string |
| `$type` | **mixed** |  |

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

yxorP::get('REQUEST')
