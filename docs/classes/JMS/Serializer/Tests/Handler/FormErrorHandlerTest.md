***

# FormErrorHandlerTest





* Full name: `\JMS\Serializer\Tests\Handler\FormErrorHandlerTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)



## Properties


### handler



```php
protected \JMS\Serializer\Handler\FormErrorHandler $handler
```






***

### visitor



```php
protected \JMS\Serializer\VisitorInterface $visitor
```






***

### dispatcher



```php
protected \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
```






***

### factory



```php
protected \Symfony\Component\Form\FormFactoryInterface $factory
```






***

## Methods


### setUp



```php
public setUp(): mixed
```











***

### tearDown



```php
protected tearDown(): mixed
```











***

### testSerializeEmptyFormError



```php
public testSerializeEmptyFormError(): mixed
```











***

### testSerializeHasFormError



```php
public testSerializeHasFormError(): mixed
```











***

### testSerializeChildElements



```php
public testSerializeChildElements(): mixed
```











***

### getBuilder



```php
protected getBuilder(string $name = &#039;name&#039;, \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher = null, string $dataClass = null): \Symfony\Component\Form\FormBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |
| `$dataClass` | **string** |  |




***

### getMockForm



```php
protected getMockForm(string $name = &#039;name&#039;): \PHPUnit_Framework_MockObject_MockObject
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### createForm



```php
protected createForm(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
