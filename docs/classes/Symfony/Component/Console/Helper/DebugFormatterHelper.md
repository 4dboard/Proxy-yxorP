***

# DebugFormatterHelper

Helps outputting debug information when running an external program from a command.

An external program can be a Process, an HTTP request, or anything else.

* Full name: `\Symfony\Component\Console\Helper\DebugFormatterHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)



## Properties


### colors



```php
private $colors
```






***

### started



```php
private $started
```






***

### count



```php
private $count
```






***

## Methods


### start

Starts a debug formatting session.

```php
public start(string $id, string $message, string $prefix = &#039;RUN&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The id of the formatting session |
| `$message` | **string** | The message to display |
| `$prefix` | **string** | The prefix to use |




***

### progress

Adds progress to a formatting session.

```php
public progress(string $id, string $buffer, bool $error = false, string $prefix = &#039;OUT&#039;, string $errorPrefix = &#039;ERR&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The id of the formatting session |
| `$buffer` | **string** | The message to display |
| `$error` | **bool** | Whether to consider the buffer as error |
| `$prefix` | **string** | The prefix for output |
| `$errorPrefix` | **string** | The prefix for error output |




***

### stop

Stops a formatting session.

```php
public stop(string $id, string $message, bool $successful, string $prefix = &#039;RES&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The id of the formatting session |
| `$message` | **string** | The message to display |
| `$successful` | **bool** | Whether to consider the result as success |
| `$prefix` | **string** | The prefix for the end output |




***

### getBorder



```php
private getBorder(string $id): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The id of the formatting session |




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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
