***

# Wddx





* Full name: `\Zend\Serializer\Adapter\Wddx`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)

**See Also:**

* http://www.infoloom.com/gcaconfs/WEB/chicago98/simeonov.HTM - 
* http://en.wikipedia.org/wiki/WDDX - 



## Properties


### options



```php
protected \Zend\Serializer\Adapter\WddxOptions $options
```






***

## Methods


### __construct

Constructor

```php
public __construct(array|\Traversable|\Zend\Serializer\Adapter\WddxOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\WddxOptions** |  |




***

### setOptions

Set options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\WddxOptions $options): \Zend\Serializer\Adapter\Wddx
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\WddxOptions** |  |




***

### getOptions

Get options

```php
public getOptions(): \Zend\Serializer\Adapter\WddxOptions
```











***

### serialize

Serialize PHP to WDDX

```php
public serialize(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### unserialize

Unserialize from WDDX to PHP

```php
public unserialize(string $wddx): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wddx` | **string** |  |




***


## Inherited methods


### __construct

Constructor

```php
public __construct(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |




***

### setOptions

Set adapter options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options): \Zend\Serializer\Adapter\AbstractAdapter
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |




***

### getOptions

Get adapter options

```php
public getOptions(): \Zend\Serializer\Adapter\AdapterOptions
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
