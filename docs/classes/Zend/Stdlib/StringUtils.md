***

# StringUtils

Utility class for handling strings of different character encodings
using available PHP extensions.

Declared abstract, as we have no need for instantiation.

* Full name: `\Zend\Stdlib\StringUtils`
* This class is an **Abstract class**



## Properties


### wrapperRegistry

Ordered list of registered string wrapper instances

```php
protected static \Zend\Stdlib\StringWrapper\StringWrapperInterface[] $wrapperRegistry
```



* This property is **static**.


***

### singleByteEncodings

A list of known single-byte character encodings (upper-case)

```php
protected static string[] $singleByteEncodings
```



* This property is **static**.


***

### hasPcreUnicodeSupport

Is PCRE compiled with Unicode support?

```php
protected static bool $hasPcreUnicodeSupport
```



* This property is **static**.


***

## Methods


### getRegisteredWrappers

Get registered wrapper classes

```php
public static getRegisteredWrappers(): string[]
```



* This method is **static**.







***

### registerWrapper

Register a string wrapper class

```php
public static registerWrapper(string $wrapper): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wrapper` | **string** |  |




***

### unregisterWrapper

Unregister a string wrapper class

```php
public static unregisterWrapper(string $wrapper): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wrapper` | **string** |  |




***

### resetRegisteredWrappers

Reset all registered wrappers so the default wrappers will be used

```php
public static resetRegisteredWrappers(): void
```



* This method is **static**.







***

### getWrapper

Get the first string wrapper supporting the given character encoding
and supports to convert into the given convert encoding.

```php
public static getWrapper(string $encoding = &#039;UTF-8&#039;, string|null $convertEncoding = null): \Zend\Stdlib\StringWrapper\StringWrapperInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** | Character encoding to support |
| `$convertEncoding` | **string&#124;null** | OPTIONAL character encoding to convert in |




***

### getSingleByteEncodings

Get a list of all known single-byte character encodings

```php
public static getSingleByteEncodings(): string[]
```



* This method is **static**.







***

### isSingleByteEncoding

Check if a given encoding is a known single-byte character encoding

```php
public static isSingleByteEncoding(string $encoding): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** |  |




***

### isValidUtf8

Check if a given string is valid UTF-8 encoded

```php
public static isValidUtf8(string $str): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |




***

### hasPcreUnicodeSupport

Is PCRE compiled with Unicode support?

```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
