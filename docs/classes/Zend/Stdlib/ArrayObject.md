***

# ArrayObject

Custom framework ArrayObject implementation

Extends version-specific "abstract" implementation.

* Full name: `\Zend\Stdlib\ArrayObject`
* This class implements:
[`\IteratorAggregate`](../../IteratorAggregate.md), [`\ArrayAccess`](../../ArrayAccess.md), [`\Serializable`](../../Serializable.md), [`\Countable`](../../Countable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`STD_PROP_LIST`|public| |1|
|`ARRAY_AS_PROPS`|public| |2|

## Properties


### storage



```php
protected array $storage
```






***

### flag



```php
protected int $flag
```






***

### iteratorClass



```php
protected string $iteratorClass
```






***

### protectedProperties



```php
protected array $protectedProperties
```






***

## Methods


### __construct

Constructor

```php
public __construct(array $input = [], int $flags = self::STD_PROP_LIST, string $iteratorClass = &#039;ArrayIterator&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **array** |  |
| `$flags` | **int** |  |
| `$iteratorClass` | **string** |  |




***

### __isset

Returns whether the requested key exists

```php
public __isset(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### __set

Sets the value at the specified key to value

```php
public __set(mixed $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### __unset

Unsets the value at the specified key

```php
public __unset(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### __get

Returns the value at the specified key by reference

```php
public __get(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### append

Appends the value

```php
public append(mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### asort

Sort the entries by value

```php
public asort(): void
```











***

### count

Get the number of public properties in the ArrayObject

```php
public count(): int
```











***

### exchangeArray

Exchange the array for another one.

```php
public exchangeArray(array|\Zend\Stdlib\ArrayObject $data): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array&#124;\Zend\Stdlib\ArrayObject** |  |




***

### getArrayCopy

Creates a copy of the ArrayObject.

```php
public getArrayCopy(): array
```











***

### getFlags

Gets the behavior flags.

```php
public getFlags(): int
```











***

### getIterator

Create a new iterator from an ArrayObject instance

```php
public getIterator(): \Iterator
```











***

### getIteratorClass

Gets the iterator classname for the ArrayObject.

```php
public getIteratorClass(): string
```











***

### ksort

Sort the entries by key

```php
public ksort(): void
```











***

### natcasesort

Sort an array using a case insensitive "natural order" algorithm

```php
public natcasesort(): void
```











***

### natsort

Sort entries using a "natural order" algorithm

```php
public natsort(): void
```











***

### offsetExists

Returns whether the requested key exists

```php
public offsetExists(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetGet

Returns the value at the specified key

```php
public offsetGet(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetSet

Sets the value at the specified key to value

```php
public offsetSet(mixed $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### offsetUnset

Unsets the value at the specified key

```php
public offsetUnset(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### serialize

Serialize an ArrayObject

```php
public serialize(): string
```











***

### setFlags

Sets the behavior flags

```php
public setFlags(int $flags): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flags` | **int** |  |




***

### setIteratorClass

Sets the iterator classname for the ArrayObject

```php
public setIteratorClass(string $class): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |




***

### uasort

Sort the entries with a user-defined comparison function and maintain key association

```php
public uasort(callable $function): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **callable** |  |




***

### uksort

Sort the entries by keys using a user-defined comparison function

```php
public uksort(callable $function): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **callable** |  |




***

### unserialize

Unserialize an ArrayObject

```php
public unserialize(string $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
