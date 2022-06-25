***

# Plugin





* Full name: `\phpDocumentor\Plugin\Plugin`



## Properties


### className



```php
protected string $className
```






***

### parameters



```php
protected \phpDocumentor\Plugin\Parameter[] $parameters
```






***

## Methods


### __construct

Initialize the plugin configuration definition with the given class name.

```php
public __construct(string $className): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### getClassName

Returns the class name for this plugin.

```php
public getClassName(): string
```











***

### getParameters

Returns the parameters associated with this plugin.

```php
public getParameters(): \phpDocumentor\Plugin\Parameter[]
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
