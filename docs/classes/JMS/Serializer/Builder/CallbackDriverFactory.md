***

# CallbackDriverFactory





* Full name: `\JMS\Serializer\Builder\CallbackDriverFactory`
* This class implements:
[`\JMS\Serializer\Builder\DriverFactoryInterface`](./DriverFactoryInterface.md)



## Properties


### callback



```php
private $callback
```






***

## Methods


### __construct



```php
public __construct(callable $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |




***

### createDriver



```php
public createDriver(array $metadataDirs, \Doctrine\Common\Annotations\Reader $reader): \Metadata\Driver\DriverInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataDirs` | **array** |  |
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
