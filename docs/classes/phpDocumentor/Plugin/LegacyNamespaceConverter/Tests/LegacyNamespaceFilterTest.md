***

# LegacyNamespaceFilterTest

Tests the phpDocumentor\Plugin\LegacyNamespaceConverter\LegacyNamespaceFilter class.



* Full name: `\phpDocumentor\Plugin\LegacyNamespaceConverter\Tests\LegacyNamespaceFilterTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)



## Properties


### filter



```php
private \phpDocumentor\Plugin\LegacyNamespaceConverter\LegacyNamespaceFilter $filter
```






***

### builderMock



```php
protected \phpDocumentor\Descriptor\ProjectDescriptorBuilder|\Mockery\MockInterface $builderMock
```






***

## Methods


### setUp

Initializes the fixture and mocks any dependencies.

```php
public setUp(): void
```











***

### testConvertClassNameWithUnderscoreWillBeConvertedToNamespace



```php
public testConvertClassNameWithUnderscoreWillBeConvertedToNamespace(): mixed
```











***

### testMultiLevelLegacyNamespace



```php
public testMultiLevelLegacyNamespace(): mixed
```











***

### testMixedNamespacesCanBeUnified



```php
public testMixedNamespacesCanBeUnified(): mixed
```











***

### testClassNameWithNewNamespaceWillNotBeModified



```php
public testClassNameWithNewNamespaceWillNotBeModified(): mixed
```











***

### testClassNameWithEmptyNamespace



```php
public testClassNameWithEmptyNamespace(): mixed
```











***

### testPrefixedNamespace



```php
public testPrefixedNamespace(): mixed
```











***

### testPrefixedNamespaceWithNamespacedClassWillNotBeModified



```php
public testPrefixedNamespaceWithNamespacedClassWillNotBeModified(): mixed
```











***

### createDescriptorMock

Creates a mocked Descriptor.

```php
private createDescriptorMock(): \Mockery\MockInterface|\phpDocumentor\Descriptor\DescriptorAbstract
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
