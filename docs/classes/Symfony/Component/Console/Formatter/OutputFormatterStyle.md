***

# OutputFormatterStyle

Formatter style class for defining styles.



* Full name: `\Symfony\Component\Console\Formatter\OutputFormatterStyle`
* This class implements:
[`\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface`](./OutputFormatterStyleInterface.md)



## Properties


### availableForegroundColors



```php
private static $availableForegroundColors
```



* This property is **static**.


***

### availableBackgroundColors



```php
private static $availableBackgroundColors
```



* This property is **static**.


***

### availableOptions



```php
private static $availableOptions
```



* This property is **static**.


***

### foreground



```php
private $foreground
```






***

### background



```php
private $background
```






***

### options



```php
private $options
```






***

## Methods


### __construct

Initializes output formatter style.

```php
public __construct(string|null $foreground = null, string|null $background = null, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$foreground` | **string&#124;null** | The style foreground color name |
| `$background` | **string&#124;null** | The style background color name |
| `$options` | **array** | The style options |




***

### setForeground

Sets style foreground color.

```php
public setForeground(string|null $color = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;null** | The color name |




***

### setBackground

Sets style background color.

```php
public setBackground(string|null $color = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string&#124;null** | The color name |




***

### setOption

Sets some specific style option.

```php
public setOption(string $option): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | The option name |




***

### unsetOption

Unsets some specific style option.

```php
public unsetOption(string $option): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | The option name |




***

### setOptions

Sets multiple style options at once.

```php
public setOptions(array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### apply

Applies the style to a given text.

```php
public apply(string $text): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | The text to style |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
