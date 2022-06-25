***

# MbString





* Full name: `\Zend\Stdlib\StringWrapper\MbString`
* Parent class: [`\Zend\Stdlib\StringWrapper\AbstractStringWrapper`](./AbstractStringWrapper.md)



## Properties


### encodings

List of supported character sets (upper case)

```php
protected static null|string[] $encodings
```



* This property is **static**.

**See Also:**

* http://php.net/manual/mbstring.supported-encodings.php - 

***

## Methods


### getSupportedEncodings

Get a list of supported character encodings

```php
public static getSupportedEncodings(): string[]
```



* This method is **static**.







***

### __construct

Constructor

```php
public __construct(): mixed
```











***

### strlen

Returns the length of the given string

```php
public strlen(string $str): int|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |




***

### substr

Returns the portion of string specified by the start and length parameters

```php
public substr(string $str, int $offset, int|null $length = null): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$offset` | **int** |  |
| `$length` | **int&#124;null** |  |




***

### strpos

Find the position of the first occurrence of a substring in a string

```php
public strpos(string $haystack, string $needle, int $offset): int|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$haystack` | **string** |  |
| `$needle` | **string** |  |
| `$offset` | **int** |  |




***

### convert

Convert a string from defined encoding to the defined convert encoding

```php
public convert(string $str, bool $reverse = false): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$reverse` | **bool** |  |




***


## Inherited methods


### isSupported

Check if the given character encoding is supported by this wrapper
and the character encoding to convert to is also supported.

```php
public static isSupported(string $encoding, string|null $convertEncoding = null): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** |  |
| `$convertEncoding` | **string&#124;null** |  |




***

### setEncoding

Set character encoding working with and convert to

```php
public setEncoding(string $encoding, string|null $convertEncoding = null): \Zend\Stdlib\StringWrapper\StringWrapperInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** | The character encoding to work with |
| `$convertEncoding` | **string&#124;null** | The character encoding to convert to |




***

### getEncoding

Get the defined character encoding to work with

```php
public getEncoding(): string
```











***

### getConvertEncoding

Get the defined character encoding to convert to

```php
public getConvertEncoding(): string|null
```











***

### convert

Convert a string from defined character encoding to the defined convert encoding

```php
public convert(string $str, bool $reverse = false): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$reverse` | **bool** |  |




***

### wordWrap

Wraps a string to a given number of characters

```php
public wordWrap(string $string, int $width = 75, string $break = &quot;
&quot;, bool $cut = false): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$width` | **int** |  |
| `$break` | **string** |  |
| `$cut` | **bool** |  |




***

### strPad

Pad a string to a certain length with another string

```php
public strPad(string $input, int $padLength, string $padString = &#039; &#039;, int $padType = STR_PAD_RIGHT): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** |  |
| `$padLength` | **int** |  |
| `$padString` | **string** |  |
| `$padType` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
