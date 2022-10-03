***

# ProgressIndicator





* Full name: `\Symfony\Component\Console\Helper\ProgressIndicator`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FORMATS`|private| |[&#039;normal&#039; =&gt; &#039; %indicator% %message%&#039;, &#039;normal_no_ansi&#039; =&gt; &#039; %message%&#039;, &#039;verbose&#039; =&gt; &#039; %indicator% %message% (%elapsed:6s%)&#039;, &#039;verbose_no_ansi&#039; =&gt; &#039; %message% (%elapsed:6s%)&#039;, &#039;very_verbose&#039; =&gt; &#039; %indicator% %message% (%elapsed:6s%, %memory:6s%)&#039;, &#039;very_verbose_no_ansi&#039; =&gt; &#039; %message% (%elapsed:6s%, %memory:6s%)&#039;]|

## Properties


### output



```php
private $output
```






***

### startTime



```php
private $startTime
```






***

### format



```php
private $format
```






***

### message



```php
private $message
```






***

### indicatorValues



```php
private $indicatorValues
```






***

### indicatorCurrent



```php
private $indicatorCurrent
```






***

### indicatorChangeInterval



```php
private $indicatorChangeInterval
```






***

### indicatorUpdateTime



```php
private $indicatorUpdateTime
```






***

### started



```php
private $started
```






***

### formatters



```php
private static array&lt;string,callable&gt; $formatters
```



* This property is **static**.


***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, string $format = null, int $indicatorChangeInterval = 100, array|null $indicatorValues = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$format` | **string** |  |
| `$indicatorChangeInterval` | **int** | Change interval in milliseconds |
| `$indicatorValues` | **array&#124;null** | Animated indicator characters |




***

### setMessage

Sets the current indicator message.

```php
public setMessage(?string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **?string** |  |




***

### start

Starts the indicator output.

```php
public start(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### advance

Advances the indicator.

```php
public advance(): mixed
```











***

### finish

Finish the indicator with message.

```php
public finish( $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **** |  |




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
| `$name` | **string** |  |




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
| `$name` | **string** |  |
| `$callable` | **callable** |  |




***

### getPlaceholderFormatterDefinition

Gets the placeholder formatter for a given name (including the delimiter char like %).

```php
public static getPlaceholderFormatterDefinition(string $name): callable|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### display



```php
private display(): mixed
```











***

### determineBestFormat



```php
private determineBestFormat(): string
```











***

### overwrite

Overwrites a previous message to the output.

```php
private overwrite(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### getCurrentTimeInMilliseconds



```php
private getCurrentTimeInMilliseconds(): float
```











***

### initPlaceholderFormatters



```php
private static initPlaceholderFormatters(): array
```



* This method is **static**.







***


***

