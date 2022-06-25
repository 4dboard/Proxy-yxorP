***

# MethodMatchFilter





* Full name: `\Zend\Hydrator\Filter\MethodMatchFilter`
* This class implements:
[`\Zend\Hydrator\Filter\FilterInterface`](./FilterInterface.md)



## Properties


### method

The method to exclude

```php
protected string $method
```






***

### exclude

Either an exclude or an include

```php
protected bool $exclude
```






***

## Methods


### __construct



```php
public __construct(string $method, bool $exclude = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The method to exclude or include |
| `$exclude` | **bool** | If the method should be excluded |




***

### filter

Should return true, if the given filter
does not match

```php
public filter(mixed $property): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** | The name of the property |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
