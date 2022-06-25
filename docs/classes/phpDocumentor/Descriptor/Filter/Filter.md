***

# Filter

Filter used to manipulate a descriptor after being build.

This class is used during the building of descriptors. It passes the descriptor to each individual sub-filter, which
may change data in the descriptor or even remove it from the building process by returning null.

* Full name: `\phpDocumentor\Descriptor\Filter\Filter`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_PRIORITY`|public|int|1000|

## Properties


### factory



```php
protected \phpDocumentor\Descriptor\Filter\ClassFactory $factory
```






***

## Methods


### __construct

Constructs the filter and attaches the factory to it.

```php
public __construct(\phpDocumentor\Descriptor\Filter\ClassFactory $factory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\phpDocumentor\Descriptor\Filter\ClassFactory** |  |




***

### attach

Attaches a filter to a specific FQCN.

```php
public attach(string $fqcn, \Zend\Filter\FilterInterface $filter, int $priority = self::DEFAULT_PRIORITY): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **string** |  |
| `$filter` | **\Zend\Filter\FilterInterface** |  |
| `$priority` | **int** | [1000] |




***

### filter

Filters the given Descriptor and returns the altered object.

```php
public filter(\phpDocumentor\Descriptor\Filter\Filterable $descriptor): \phpDocumentor\Descriptor\Filter\Filterable|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\Filter\Filterable** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
