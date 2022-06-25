***

# AbstractConfigFactory

Class AbstractConfigFactory



* Full name: `\Zend\Config\AbstractConfigFactory`
* This class implements:
[`\Zend\ServiceManager\AbstractFactoryInterface`](../ServiceManager/AbstractFactoryInterface.md)



## Properties


### configs



```php
protected array $configs
```






***

### defaultPatterns



```php
protected string[] $defaultPatterns
```






***

### patterns



```php
protected string[] $patterns
```






***

## Methods


### canCreateServiceWithName

Determine if we can create a service with name

```php
public canCreateServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, string $name, string $requestedName): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **string** |  |
| `$requestedName` | **string** |  |




***

### createServiceWithName

Create service with name

```php
public createServiceWithName(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator, string $name, string $requestedName): string|mixed|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceLocator` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |
| `$name` | **string** |  |
| `$requestedName` | **string** |  |




***

### addPattern



```php
public addPattern(string $pattern): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |




***

### addPatterns



```php
public addPatterns(array|\Traversable $patterns): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **array&#124;\Traversable** |  |




***

### setPatterns



```php
public setPatterns(array|\Traversable $patterns): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$patterns` | **array&#124;\Traversable** |  |




***

### getPatterns



```php
public getPatterns(): array
```











***

### match



```php
protected match(string $requestedName): null|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$requestedName` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
