***

# CustomArrayObject

This class is a hand written simplified version of PHP native `ArrayObject`
class, to show that it behaves differently than the PHP native implementation.



* Full name: `\Symfony\Component\Validator\Tests\Fixtures\CustomArrayObject`
* This class implements:
[`\ArrayAccess`](../../../../../ArrayAccess.md), [`\IteratorAggregate`](../../../../../IteratorAggregate.md), [`\Countable`](../../../../../Countable.md), [`\Serializable`](../../../../../Serializable.md)



## Properties


### array



```php
private $array
```






***

## Methods


### __construct



```php
public __construct(array $array = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### offsetExists



```php
public offsetExists(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### offsetGet



```php
public offsetGet(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### offsetSet



```php
public offsetSet(mixed $offset, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$value` | **mixed** |  |




***

### offsetUnset



```php
public offsetUnset(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### getIterator



```php
public getIterator(): mixed
```











***

### count



```php
public count(): mixed
```











***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $serialized): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serialized` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
