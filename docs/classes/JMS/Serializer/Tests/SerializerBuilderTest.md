***

# SerializerBuilderTest





* Full name: `\JMS\Serializer\Tests\SerializerBuilderTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)



## Properties


### builder



```php
private \JMS\Serializer\SerializerBuilder $builder
```






***

### fs



```php
private $fs
```






***

### tmpDir



```php
private $tmpDir
```






***

## Methods


### testBuildWithoutAnythingElse



```php
public testBuildWithoutAnythingElse(): mixed
```











***

### testWithCache



```php
public testWithCache(): mixed
```











***

### testDoesAddDefaultHandlers



```php
public testDoesAddDefaultHandlers(): mixed
```











***

### testDoesNotAddDefaultHandlersWhenExplicitlyConfigured



```php
public testDoesNotAddDefaultHandlersWhenExplicitlyConfigured(): mixed
```











***

### testDoesNotAddOtherVisitorsWhenConfiguredExplicitly



```php
public testDoesNotAddOtherVisitorsWhenConfiguredExplicitly(): mixed
```











***

### testIncludeInterfaceMetadata



```php
public testIncludeInterfaceMetadata(): mixed
```











***

### testSetSerializationContext



```php
public testSetSerializationContext(): mixed
```











***

### testSetDeserializationContext



```php
public testSetDeserializationContext(): mixed
```











***

### testSetCallbackSerializationContextWithSerializeNull



```php
public testSetCallbackSerializationContextWithSerializeNull(): mixed
```











***

### testSetCallbackSerializationContextWithNotSerializeNull



```php
public testSetCallbackSerializationContextWithNotSerializeNull(): mixed
```











***

### expressionFunctionProvider



```php
public expressionFunctionProvider(): mixed
```











***

### testExpressionEngine



```php
public testExpressionEngine(\Symfony\Component\ExpressionLanguage\ExpressionFunction $function,  $json): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **\Symfony\Component\ExpressionLanguage\ExpressionFunction** |  |
| `$json` | **** |  |




***

### setUp



```php
protected setUp(): mixed
```











***

### tearDown



```php
protected tearDown(): mixed
```











***

### getField



```php
private getField(mixed $obj, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$name` | **mixed** |  |




***

### getIncludeInterfaces



```php
private getIncludeInterfaces(\JMS\Serializer\SerializerBuilder $builder): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\JMS\Serializer\SerializerBuilder** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
