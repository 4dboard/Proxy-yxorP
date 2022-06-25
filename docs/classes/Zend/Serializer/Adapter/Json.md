***

# Json





* Full name: `\Zend\Serializer\Adapter\Json`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)



## Properties


### options



```php
protected \Zend\Serializer\Adapter\JsonOptions $options
```






***

## Methods


### setOptions

Set options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\JsonOptions $options): \Zend\Serializer\Adapter\Json
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\JsonOptions** |  |




***

### getOptions

Get options

```php
public getOptions(): \Zend\Serializer\Adapter\JsonOptions
```











***

### serialize

Serialize PHP value to JSON

```php
public serialize(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### unserialize

Deserialize JSON to PHP value

```php
public unserialize(string $json): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |




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
