***

# MethodMetadata

Base class for method metadata.

This class is intended to be extended to add your application specific
properties, and flags.

* Full name: `\Metadata\MethodMetadata`
* This class implements:
[`\Serializable`](../Serializable.md)



## Properties


### class



```php
public $class
```






***

### name



```php
public $name
```






***

### reflection



```php
public $reflection
```






***

## Methods


### __construct



```php
public __construct(mixed $class, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$name` | **mixed** |  |




***

### invoke



```php
public invoke(object $obj, array $args = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |
| `$args` | **array** |  |




***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
