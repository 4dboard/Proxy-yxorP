***

# ProgressBar

The ProgressBar provides helpers to display progress output.



* Full name: `\Symfony\Component\Console\Helper\ProgressBar`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FORMAT_VERBOSE`|public| |&#039;verbose&#039;|
|`FORMAT_VERY_VERBOSE`|public| |&#039;very_verbose&#039;|
|`FORMAT_DEBUG`|public| |&#039;debug&#039;|
|`FORMAT_NORMAL`|public| |&#039;normal&#039;|
|`FORMAT_VERBOSE_NOMAX`|private| |&#039;verbose_nomax&#039;|
|`FORMAT_VERY_VERBOSE_NOMAX`|private| |&#039;very_verbose_nomax&#039;|
|`FORMAT_DEBUG_NOMAX`|private| |&#039;debug_nomax&#039;|
|`FORMAT_NORMAL_NOMAX`|private| |&#039;normal_nomax&#039;|

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

### writeCount



```php
private $writeCount
```






***

### lastWriteTime



```php
private $lastWriteTime
```






***

### minSecondsBetweenRedraws



```php
private $minSecondsBetweenRedraws
```






***

### maxSecondsBetweenRedraws



```php
private $maxSecondsBetweenRedraws
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

### terminal



```php
private $terminal
```






***

### previousMessage



```php
private $previousMessage
```






***

### cursor



```php
private $cursor
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
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, int $max, float $minSecondsBetweenRedraws = 1 / 25): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$max` | **int** | Maximum steps (0 if unknown) |
| `$minSecondsBetweenRedraws` | **float** |  |




***

### setPlaceholderFormatterDefinition

Sets a placeholder formatter for a given name.

```php
public static setPlaceholderFormatterDefinition(string $name, callable $callable): void
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
public static getPlaceholderFormatterDefinition(string $name): ?callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The placeholder name (including the delimiter char like %) |




***

### setFormatDefinition

Sets a format for a given name.

```php
public static setFormatDefinition(string $name, string $format): void
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
public static getFormatDefinition(string $name): ?string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The format name |




***

### setMessage

Associates a text with a named placeholder.

```php
public setMessage(string $message, string $name = &#039;message&#039;): mixed
```

The text is displayed when the progress bar is rendered but only
when the corresponding placeholder is part of the custom format line
(by wrapping the name with %).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The text to associate with the placeholder |
| `$name` | **string** | The name of the placeholder |




***

### getMessage



```php
public getMessage(string $name = &#039;message&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getStartTime



```php
public getStartTime(): int
```











***

### getMaxSteps



```php
public getMaxSteps(): int
```











***

### getProgress



```php
public getProgress(): int
```











***

### getStepWidth



```php
private getStepWidth(): int
```











***

### getProgressPercent



```php
public getProgressPercent(): float
```











***

### getBarOffset



```php
public getBarOffset(): float
```











***

### getEstimated



```php
public getEstimated(): float
```











***

### getRemaining



```php
public getRemaining(): float
```











***

### setBarWidth



```php
public setBarWidth(int $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |




***

### getBarWidth



```php
public getBarWidth(): int
```











***

### setBarCharacter



```php
public setBarCharacter(string $char): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |




***

### getBarCharacter



```php
public getBarCharacter(): string
```











***

### setEmptyBarCharacter



```php
public setEmptyBarCharacter(string $char): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |




***

### getEmptyBarCharacter



```php
public getEmptyBarCharacter(): string
```











***

### setProgressCharacter



```php
public setProgressCharacter(string $char): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |




***

### getProgressCharacter



```php
public getProgressCharacter(): string
```











***

### setFormat



```php
public setFormat(string $format): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |




***

### setRedrawFrequency

Sets the redraw frequency.

```php
public setRedrawFrequency(int|null $freq): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$freq` | **int&#124;null** | The frequency in steps |




***

### minSecondsBetweenRedraws



```php
public minSecondsBetweenRedraws(float $seconds): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |




***

### maxSecondsBetweenRedraws



```php
public maxSecondsBetweenRedraws(float $seconds): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |




***

### iterate

Returns an iterator that will automatically update the progress bar when iterated.

```php
public iterate(iterable $iterable, int|null $max = null): iterable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$max` | **int&#124;null** | Number of steps to complete the bar (0 if indeterminate), if null it will be inferred from $iterable |




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



```php
public setProgress(int $step): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** |  |




***

### setMaxSteps



```php
public setMaxSteps(int $max): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** |  |




***

### finish

Finishes the progress output.

```php
public finish(): void
```











***

### display

Outputs the current progress string.

```php
public display(): void
```











***

### clear

Removes the progress bar from the current line.

```php
public clear(): void
```

This is useful if you wish to write some output
while a progress bar is running.
Call display() to show the progress bar again.









***

### setRealFormat



```php
private setRealFormat(string $format): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |




***

### overwrite

Overwrites a previous message to the output.

```php
private overwrite(string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### determineBestFormat



```php
private determineBestFormat(): string
```











***

### initPlaceholderFormatters



```php
private static initPlaceholderFormatters(): array
```



* This method is **static**.







***

### initFormats



```php
private static initFormats(): array
```



* This method is **static**.







***

### buildLine



```php
private buildLine(): string
```











***


***

