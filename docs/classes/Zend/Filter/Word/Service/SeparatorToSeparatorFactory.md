***

# SeparatorToSeparatorFactory





* Full name: `\Zend\Filter\Word\Service\SeparatorToSeparatorFactory`
* This class implements:
[`\Zend\ServiceManager\FactoryInterface`](../../../ServiceManager/FactoryInterface.md), [`\Zend\ServiceManager\MutableCreationOptionsInterface`](../../../ServiceManager/MutableCreationOptionsInterface.md)



## Properties


### creationOptions



```php
protected array $creationOptions
```






***

## Methods


### setCreationOptions

Set creation options

```php
public setCreationOptions(array $creationOptions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$creationOptions` | **array** |  |




***

### getCreationOptions

Get creation options

```php
public getCreationOptions(): array
```











***

### createService

Create service

```php
public createService(\Zend\ServiceManager\ServiceLocatorInterface $plugins): \Zend\Filter\Word\SeparatorToSeparator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugins` | **\Zend\ServiceManager\ServiceLocatorInterface** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
