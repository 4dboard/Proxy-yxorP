***

# ProgressHelper

The Progress class provides helpers to display progress output.

* Full name: `\Symfony\Component\Console\Helper\ProgressHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FORMAT_QUIET`|public| |&#039; %percent%%&#039;|
|`FORMAT_NORMAL`|public| |&#039; %current%/%max% [%bar%] %percent%%&#039;|
|`FORMAT_VERBOSE`|public| |&#039; %current%/%max% [%bar%] %percent%% Elapsed: %elapsed%&#039;|
|`FORMAT_QUIET_NOMAX`|public| |&#039; %current%&#039;|
|`FORMAT_NORMAL_NOMAX`|public| |&#039; %current% [%bar%]&#039;|
|`FORMAT_VERBOSE_NOMAX`|public| |&#039; %current% [%bar%] Elapsed: %elapsed%&#039;|

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

### redrawFreq

```php
private $redrawFreq
```

***

### lastMessagesLength

```php
private $lastMessagesLength
```

***

### barCharOriginal

```php
private $barCharOriginal
```

***

### output

```php
private \Symfony\Component\Console\Output\OutputInterface $output
```

***

### current

Current step.

```php
private int $current
```

***

### max

Maximum number of steps.

```php
private int $max
```

***

### startTime

Start time of the progress bar.

```php
private int $startTime
```

***

### defaultFormatVars

List of formatting variables.

```php
private array $defaultFormatVars
```

***

### formatVars

Available formatting variables.

```php
private array $formatVars
```

***

### widths

Stored format part widths (used for padding).

```php
private array $widths
```

***

### timeFormats

Various time formats.

```php
private array $timeFormats
```

***

## Methods

### __construct

```php
public __construct(mixed $triggerDeprecationError = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$triggerDeprecationError` | **mixed** |  |

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
public setRedrawFrequency(int $freq): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$freq` | **int** | The frequency in steps |

***

### start

Starts the progress output.

```php
public start(\Symfony\Component\Console\Output\OutputInterface $output, int|null $max = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$max` | **int&#124;null** | Maximum steps |

***

### advance

Advances the progress output X steps.

```php
public advance(int $step = 1, bool $redraw = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | Number of steps to advance |
| `$redraw` | **bool** | Whether to redraw or not |

***

### setCurrent

Sets the current progress.

```php
public setCurrent(int $current, bool $redraw = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$current` | **int** | The current progress |
| `$redraw` | **bool** | Whether to redraw or not |

***

### display

Outputs the current progress string.

```php
public display(bool $finish = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finish` | **bool** | Forces the end result |

***

### clear

Removes the progress bar from the current line.

```php
public clear(): mixed
```

This is useful if you wish to write some output while a progress bar is running. Call display() to show the progress bar
again.









***

### finish

Finishes the progress output.

```php
public finish(): mixed
```

***

### initialize

Initializes the progress helper.

```php
private initialize(): mixed
```

***

### generate

Generates the array map of format variables to values.

```php
private generate(bool $finish = false): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$finish` | **bool** | Forces the end result |

**Return Value:**

Array of format vars and values



***

### humaneTime

Converts seconds into human-readable format.

```php
private humaneTime(int $secs): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **int** | Number of seconds |

**Return Value:**

Time in readable format



***

### overwrite

Overwrites a previous message to the output.

```php
private overwrite(\Symfony\Component\Console\Output\OutputInterface $output, string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$message` | **string** | The message |

***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

***

## Inherited methods

### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |

**Return Value:**

The length of the string



***

### formatTime

```php
public static formatTime(mixed $secs): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |

***

### formatMemory

```php
public static formatMemory(mixed $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

yxorP::get('REQUEST')
