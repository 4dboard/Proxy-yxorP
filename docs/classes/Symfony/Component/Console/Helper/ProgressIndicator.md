***

# ProgressIndicator





* Full name: `\Symfony\Component\Console\Helper\ProgressIndicator`



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
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, string|null $format = null, int $indicatorChangeInterval = 100, array|null $indicatorValues = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$format` | **string&#124;null** | Indicator format |
| `$indicatorChangeInterval` | **int** | Change interval in milliseconds |
| `$indicatorValues` | **array&#124;null** | Animated indicator characters |




***

### setMessage

Sets the current indicator message.

```php
public setMessage(string|null $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;null** |  |




***

### start

Starts the indicator output.

```php
public start( $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **** |  |




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
| `$name` | **string** | The format name |


**Return Value:**

A format string



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

### display



```php
private display(): mixed
```











***

### determineBestFormat



```php
private determineBestFormat(): mixed
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
| `$message` | **string** | The message |




***

### getCurrentTimeInMilliseconds



```php
private getCurrentTimeInMilliseconds(): mixed
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







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
