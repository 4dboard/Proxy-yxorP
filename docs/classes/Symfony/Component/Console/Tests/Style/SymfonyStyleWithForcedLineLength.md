***

# SymfonyStyleWithForcedLineLength

Use this class in tests to force the line length and ensure a consistent output for expectations.

* Full name: `\Symfony\Component\Console\Tests\Style\SymfonyStyleWithForcedLineLength`
* Parent class: [`\Symfony\Component\Console\Style\SymfonyStyle`](../../Style/SymfonyStyle.md)

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

## Inherited methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### block

Formats a message as a block of text.

```php
public block(string|array $messages, string|null $type = null, string|null $style = null, string $prefix = &#039; &#039;, bool $padding = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **string&#124;array** | The message to write in the block |
| `$type` | **string&#124;null** | The block type (added in [] on first line) |
| `$style` | **string&#124;null** | The style to apply to the whole block |
| `$prefix` | **string** | The prefix for the block |
| `$padding` | **bool** | Whether to add vertical padding |

***

### title

{@inheritdoc}

```php
public title(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### section

{@inheritdoc}

```php
public section(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### listing

{@inheritdoc}

```php
public listing(array $elements): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |

***

### text

{@inheritdoc}

```php
public text(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### comment

Formats a command comment.

```php
public comment(string|array $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;array** |  |

***

### success

{@inheritdoc}

```php
public success(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### error

{@inheritdoc}

```php
public error(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### warning

{@inheritdoc}

```php
public warning(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### note

{@inheritdoc}

```php
public note(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### caution

{@inheritdoc}

```php
public caution(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### table

{@inheritdoc}

```php
public table(array $headers, array $rows): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |
| `$rows` | **array** |  |

***

### ask

{@inheritdoc}

```php
public ask(mixed $question, mixed $default = null, mixed $validator = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **mixed** |  |
| `$default` | **mixed** |  |
| `$validator` | **mixed** |  |

***

### askHidden

{@inheritdoc}

```php
public askHidden(mixed $question, mixed $validator = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **mixed** |  |
| `$validator` | **mixed** |  |

***

### confirm

{@inheritdoc}

```php
public confirm(mixed $question, mixed $default = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **mixed** |  |
| `$default` | **mixed** |  |

***

### choice

{@inheritdoc}

```php
public choice(mixed $question, array $choices, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **mixed** |  |
| `$choices` | **array** |  |
| `$default` | **mixed** |  |

***

### progressStart

{@inheritdoc}

```php
public progressStart(mixed $max): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **mixed** |  |

***

### progressAdvance

{@inheritdoc}

```php
public progressAdvance(mixed $step = 1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **mixed** |  |

***

### progressFinish

{@inheritdoc}

```php
public progressFinish(): mixed
```

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

### askQuestion

```php
public askQuestion(\Symfony\Component\Console\Question\Question $question): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **\Symfony\Component\Console\Question\Question** |  |

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

### getProgressBar

```php
private getProgressBar(): \Symfony\Component\Console\Helper\ProgressBar
```

***

### getTerminalWidth

```php
private getTerminalWidth(): mixed
```

***

### autoPrependBlock

```php
private autoPrependBlock(): mixed
```

***

### autoPrependText

```php
private autoPrependText(): mixed
```

***

### reduceBuffer

```php
private reduceBuffer(mixed $messages): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** |  |

***

### createBlock

```php
private createBlock(mixed $messages, mixed $type = null, mixed $style = null, mixed $prefix = &#039; &#039;, mixed $padding = false, mixed $escape = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** |  |
| `$type` | **mixed** |  |
| `$style` | **mixed** |  |
| `$prefix` | **mixed** |  |
| `$padding` | **mixed** |  |
| `$escape` | **mixed** |  |

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
