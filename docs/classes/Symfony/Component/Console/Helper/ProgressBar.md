***

# ProgressBar

The ProgressBar provides helpers to display progress output.

* Full name: `\Symfony\Component\Console\Helper\ProgressBar`

## Properties

### barWidth

```php
private $barWidth
```

***

### barChar

```php
private $barChar
```

***

### emptyBarChar

```php
private $emptyBarChar
```

***

### progressChar

```php
private $progressChar
```

***

### format

```php
private $format
```

***

### internalFormat

```php
private $internalFormat
```

***

### redrawFreq

```php
private $redrawFreq
```

***

### output

```php
private $output
```

***

### step

```php
private $step
```

***

### max

```php
private $max
```

***

### startTime

```php
private $startTime
```

***

### stepWidth

```php
private $stepWidth
```

***

### percent

```php
private $percent
```

***

### formatLineCount

```php
private $formatLineCount
```

***

### messages

```php
private $messages
```

***

### overwrite

```php
private $overwrite
```

***

### firstRun

```php
private $firstRun
```

***

### formatters

```php
private static $formatters
```

* This property is **static**.

***

### formats

```php
private static $formats
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, int $max): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An OutputInterface instance |
| `$max` | **int** | Maximum steps (0 if unknown) |

***

### setPlaceholderFormatterDefinition

Sets a placeholder formatter for a given name.

```php
public static setPlaceholderFormatterDefinition(string $name, callable $callable): mixed
```

This method also allow you to override an existing placeholder.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The placeholder name (including the delimiter char like %) |
| `$callable` | **callable** | A PHP callable |

***

### getPlaceholderFormatterDefinition

Gets the placeholder formatter for a given name.

```php
public static getPlaceholderFormatterDefinition(string $name): callable|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The placeholder name (including the delimiter char like %) |

**Return Value:**

A PHP callable



***

### setFormatDefinition

Sets a format for a given name.

```php
public static setFormatDefinition(string $name, string $format): mixed
```

This method also allow you to override an existing format.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The format name |
| `$format` | **string** | A format string |

***

### getFormatDefinition

Gets the format for a given name.

```php
public static getFormatDefinition(string $name): string|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The format name |

**Return Value:**

A format string



***

### setMessage

Associates a text with a named placeholder.

```php
public setMessage(string $message, string $name = &#039;message&#039;): mixed
```

The text is displayed when the progress bar is rendered but only when the corresponding placeholder is part of the
custom format line
(by wrapping the name with %).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The text to associate with the placeholder |
| `$name` | **string** | The name of the placeholder |

***

### getMessage

```php
public getMessage(mixed $name = &#039;message&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getStartTime

Gets the progress bar start time.

```php
public getStartTime(): int
```

**Return Value:**

The progress bar start time



***

### getMaxSteps

Gets the progress bar maximal steps.

```php
public getMaxSteps(): int
```

**Return Value:**

The progress bar max steps



***

### getStep

Gets the progress bar step.

```php
public getStep(): int
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The progress bar step



***

### getProgress

Gets the current step position.

```php
public getProgress(): int
```

**Return Value:**

The progress bar step



***

### getProgressPercent

Gets the current progress bar percent.

```php
public getProgressPercent(): float
```

**Return Value:**

The current progress bar percent



***

### setBarWidth

Sets the progress bar width.

```php
public setBarWidth(int $size): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** | The progress bar size |

***

### getBarWidth

Gets the progress bar width.

```php
public getBarWidth(): int
```

**Return Value:**

The progress bar size



***

### setBarCharacter

Sets the bar character.

```php
public setBarCharacter(string $char): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** | A character |

***

### getBarCharacter

Gets the bar character.

```php
public getBarCharacter(): string
```

**Return Value:**

A character



***

### setEmptyBarCharacter

Sets the empty bar character.

```php
public setEmptyBarCharacter(string $char): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** | A character |

***

### getEmptyBarCharacter

Gets the empty bar character.

```php
public getEmptyBarCharacter(): string
```

**Return Value:**

A character



***

### setProgressCharacter

Sets the progress bar character.

```php
public setProgressCharacter(string $char): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** | A character |

***

### getProgressCharacter

Gets the progress bar character.

```php
public getProgressCharacter(): string
```

**Return Value:**

A character



***

### setFormat

Sets the progress bar format.

```php
public setFormat(string $format): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format |

***

### setRedrawFrequency

Sets the redraw frequency.

```php
public setRedrawFrequency(int|float $freq): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$freq` | **int&#124;float** | The frequency in steps |

***

### start

Starts the progress output.

```php
public start(int|null $max = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int&#124;null** | Number of steps to complete the bar (0 if indeterminate), null to leave unchanged |

***

### advance

Advances the progress output X steps.

```php
public advance(int $step = 1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | Number of steps to advance |

***

### setCurrent

Sets the current progress.

```php
public setCurrent(int $step): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | The current progress |

***

### setOverwrite

Sets whether to overwrite the progressbar, false for new line.

```php
public setOverwrite(bool $overwrite): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$overwrite` | **bool** |  |

***

### setProgress

Sets the current progress.

```php
public setProgress(int $step): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | The current progress |

***

### finish

Finishes the progress output.

```php
public finish(): mixed
```

***

### display

Outputs the current progress string.

```php
public display(): mixed
```

***

### clear

Removes the progress bar from the current line.

```php
public clear(): mixed
```

This is useful if you wish to write some output while a progress bar is running. Call display() to show the progress bar
again.









***

### setRealFormat

Sets the progress bar format.

```php
private setRealFormat(string $format): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format |

***

### setMaxSteps

Sets the progress bar maximal steps.

```php
private setMaxSteps(int $max): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** | The progress bar max steps |

***

### overwrite

Overwrites a previous message to the output.

```php
private overwrite(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message |

***

### determineBestFormat

```php
private determineBestFormat(): mixed
```

***

### initPlaceholderFormatters

```php
private static initPlaceholderFormatters(): mixed
```

* This method is **static**.

***

### initFormats

```php
private static initFormats(): mixed
```

* This method is **static**.

yxorP::get('REQUEST')
