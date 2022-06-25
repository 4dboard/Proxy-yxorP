***

# Twig_Function_Node

Represents a template function as a node.

Use \Twig\TwigFunction instead.

* Full name: `\Twig_Function_Node`
* Parent class: [`\Twig_Function`](./Twig_Function.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### class



```php
protected $class
```






***

## Methods


### __construct



```php
public __construct(mixed $class, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$options` | **array** |  |




***

### getClass



```php
public getClass(): mixed
```











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
public getSafe(\Twig\Node\Node $functionArgs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionArgs` | **\Twig\Node\Node** |  |




***

### getCallable



```php
public getCallable(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
