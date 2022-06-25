***

# OutputFormatter

Formatter class for console output.



* Full name: `\Symfony\Component\Console\Formatter\OutputFormatter`
* This class implements:
[`\Symfony\Component\Console\Formatter\OutputFormatterInterface`](./OutputFormatterInterface.md)



## Properties


### decorated



```php
private $decorated
```






***

### styles



```php
private $styles
```






***

### styleStack



```php
private $styleStack
```






***

## Methods


### escape

Escapes "<" special char in given text.

```php
public static escape(string $text): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | Text to escape |


**Return Value:**

Escaped text



***

### __construct

Initializes console output formatter.

```php
public __construct(bool $decorated = false, \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface[] $styles = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** | Whether this formatter should actually decorate strings |
| `$styles` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface[]** | Array of &quot;name =&gt; FormatterStyle&quot; instances |




***

### setDecorated

Sets the decorated flag.

```php
public setDecorated(mixed $decorated): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **mixed** | Whether to decorate the messages or not |




***

### isDecorated

Gets the decorated flag.

```php
public isDecorated(): bool
```









**Return Value:**

true if the output will decorate messages, false otherwise



***

### setStyle

Sets a new style.

```php
public setStyle(mixed $name, \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The style name |
| `$style` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** | The style instance |




***

### hasStyle

Checks if output formatter has style with specified name.

```php
public hasStyle(mixed $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getStyle

Gets style options from style with specified name.

```php
public getStyle(mixed $name): \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### format

Formats a message according to the given styles.

```php
public format(mixed $message): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** | The message to style |


**Return Value:**

The styled message



***

### getStyleStack



```php
public getStyleStack(): \Symfony\Component\Console\Formatter\OutputFormatterStyleStack
```











***

### createStyleFromString

Tries to create new style instance from string.

```php
private createStyleFromString(string $string): \Symfony\Component\Console\Formatter\OutputFormatterStyle|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |


**Return Value:**

false if string is not format string



***

### applyCurrentStyle

Applies current style from stack to text, if must be applied.

```php
private applyCurrentStyle(string $text): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | Input text |


**Return Value:**

Styled text



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
