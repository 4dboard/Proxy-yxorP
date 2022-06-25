***

# Twig_Filter

Represents a template filter.

Use \Twig\TwigFilter instead.

* Full name: `\Twig_Filter`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Twig_FilterInterface`](./Twig_FilterInterface.md), [`\Twig_FilterCallableInterface`](./Twig_FilterCallableInterface.md)
* This class is an **Abstract class**



## Properties


### options



```php
protected $options
```






***

### arguments



```php
protected $arguments
```






***

## Methods


### __construct



```php
public __construct(array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### setArguments



```php
public setArguments(mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **mixed** |  |




***

### getArguments



```php
public getArguments(): mixed
```











***

### needsEnvironment



```php
public needsEnvironment(): mixed
```











***

### needsContext



```php
public needsContext(): mixed
```











***

### getSafe



```php
public getSafe(\Twig\Node\Node $filterArgs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterArgs` | **\Twig\Node\Node** |  |




***

### getPreservesSafety



```php
public getPreservesSafety(): mixed
```











***

### getPreEscape



```php
public getPreEscape(): mixed
```











***

### getCallable



```php
public getCallable(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
