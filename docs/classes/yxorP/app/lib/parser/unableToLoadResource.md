***

# unableToLoadResource





* Full name: `\yxorP\app\lib\parser\unableToLoadResource`
* Parent class: [`RuntimeException`](../../../../RuntimeException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\cannotProcessHostInterface`](./cannotProcessHostInterface.md)
* This class is a **Final class**




## Methods


### dueToInvalidUri



```php
public static dueToInvalidUri(string $uri): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***

### dueToUnavailableService



```php
public static dueToUnavailableService(string $uri, \Throwable $exception): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |
| `$exception` | **\Throwable** |  |




***

### dueToUnexpectedStatusCode



```php
public static dueToUnexpectedStatusCode(string $uri, int $statusCode): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |
| `$statusCode` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
