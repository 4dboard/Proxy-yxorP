***

# UnexpectedValueException

Exception for given parameters causing invalid/unexpected state on instantiation



* Full name: `\Doctrine\Instantiator\Exception\UnexpectedValueException`
* Parent class: [`UnexpectedValueException`](../../../UnexpectedValueException.md)
* This class implements:
[`\Doctrine\Instantiator\Exception\ExceptionInterface`](./ExceptionInterface.md)




## Methods


### fromSerializationTriggeredException



```php
public static fromSerializationTriggeredException(\ReflectionClass $reflectionClass, \Exception $exception): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |
| `$exception` | **\Exception** |  |




***

### fromUncleanUnSerialization



```php
public static fromUncleanUnSerialization(\ReflectionClass $reflectionClass, string $errorString, int $errorCode, string $errorFile, int $errorLine): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |
| `$errorString` | **string** |  |
| `$errorCode` | **int** |  |
| `$errorFile` | **string** |  |
| `$errorLine` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
