***

# Twig_Filter_Method

Represents a method template filter.

Use \Twig\TwigFilter instead.

* Full name: `\Twig_Filter_Method`
* Parent class: [`\Twig_Filter`](./Twig_Filter.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### extension



```php
protected $extension
```






***

### method



```php
protected $method
```






***

## Methods


### __construct



```php
public __construct(\Twig\Extension\ExtensionInterface $extension, mixed $method, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **\Twig\Extension\ExtensionInterface** |  |
| `$method` | **mixed** |  |
| `$options` | **array** |  |




***

### compile



```php
public compile(): mixed
```











***


## Inherited methods


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
