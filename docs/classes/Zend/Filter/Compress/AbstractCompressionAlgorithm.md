***

# AbstractCompressionAlgorithm

Abstract compression adapter



* Full name: `\Zend\Filter\Compress\AbstractCompressionAlgorithm`
* This class implements:
[`\Zend\Filter\Compress\CompressionAlgorithmInterface`](./CompressionAlgorithmInterface.md)
* This class is an **Abstract class**



## Properties


### options



```php
protected array $options
```






***

## Methods


### __construct

Class constructor

```php
public __construct(null|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable** | (Optional) Options to set |




***

### getOptions

Returns one or all set options

```php
public getOptions(string $option = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | (Optional) Option to return |




***

### setOptions

Sets all or one option

```php
public setOptions(array $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
