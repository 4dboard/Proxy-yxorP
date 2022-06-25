***

# CallableDeserializationContextFactory

Deserialization Context Factory using a callable.



* Full name: `\JMS\Serializer\ContextFactory\CallableDeserializationContextFactory`
* Parent class: [`\JMS\Serializer\ContextFactory\CallableContextFactory`](./CallableContextFactory.md)
* This class implements:
[`\JMS\Serializer\ContextFactory\DeserializationContextFactoryInterface`](./DeserializationContextFactoryInterface.md)




## Methods


### createDeserializationContext



```php
public createDeserializationContext(): \JMS\Serializer\DeserializationContext
```











***


## Inherited methods


### __construct



```php
public __construct(callable $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |




***

### createContext



```php
protected createContext(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
