***

# TwigFilter

Represents a template filter.



* Full name: `\Twig\TwigFilter`



## Properties


### name



```php
protected $name
```






***

### callable



```php
protected $callable
```






***

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
public __construct(mixed $name, mixed $callable, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$callable` | **mixed** |  |
| `$options` | **array** |  |




***

### getName



```php
public getName(): mixed
```











***

### getCallable



```php
public getCallable(): mixed
```











***

### getNodeClass



```php
public getNodeClass(): mixed
```











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

### isVariadic



```php
public isVariadic(): mixed
```











***

### isDeprecated



```php
public isDeprecated(): mixed
```











***

### getDeprecatedVersion



```php
public getDeprecatedVersion(): mixed
```











***

### getAlternative



```php
public getAlternative(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
