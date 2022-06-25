***

# ApcIterator





* Full name: `\Zend\Cache\Storage\Adapter\ApcIterator`
* This class implements:
[`\Zend\Cache\Storage\IteratorInterface`](../IteratorInterface.md)



## Properties


### storage

The apc storage instance

```php
protected \Zend\Cache\Storage\Adapter\Apc $storage
```






***

### mode

The iterator mode

```php
protected int $mode
```






***

### baseIterator

The base APCIterator instance

```php
protected \APCIterator $baseIterator
```






***

### prefixLength

The length of the namespace prefix

```php
protected int $prefixLength
```






***

## Methods


### __construct

Constructor

```php
public __construct(\Zend\Cache\Storage\Adapter\Apc $storage, \APCIterator $baseIterator, string $prefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **\Zend\Cache\Storage\Adapter\Apc** |  |
| `$baseIterator` | **\APCIterator** |  |
| `$prefix` | **string** |  |




***

### getStorage

Get storage instance

```php
public getStorage(): \Zend\Cache\Storage\Adapter\Apc
```











***

### getMode

Get iterator mode

```php
public getMode(): int
```









**Return Value:**

Value of IteratorInterface::CURRENT_AS_*



***

### setMode

Set iterator mode

```php
public setMode(int $mode): \Zend\Cache\Storage\Adapter\ApcIterator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **int** |  |


**Return Value:**

Fluent interface



***

### current

Get current key, value or metadata.

```php
public current(): mixed
```











***

### key

Get current key

```php
public key(): string
```











***

### next

Move forward to next element

```php
public next(): void
```











***

### valid

Checks if current position is valid

```php
public valid(): bool
```











***

### rewind

Rewind the Iterator to the first element.

```php
public rewind(): void
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
