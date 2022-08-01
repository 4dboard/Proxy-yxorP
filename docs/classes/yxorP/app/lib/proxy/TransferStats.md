***

# transferStats





* Full name: `\yxorP\app\lib\proxy\transferStats`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### request



```php
private $request
```






***

### response



```php
private $response
```






***

### transferTime



```php
private $transferTime
```






***

### handlerStats



```php
private $handlerStats
```






***

### handlerErrorData



```php
private $handlerErrorData
```






***

## Methods


### __construct



```php
public __construct(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, mixed $transferTime = null, mixed $handlerErrorData = null, mixed $handlerStats = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$transferTime` | **mixed** |  |
| `$handlerErrorData` | **mixed** |  |
| `$handlerStats` | **mixed** |  |




***

### getRequest



```php
public getRequest(): mixed
```











***

### getResponse



```php
public getResponse(): mixed
```











***

### hasResponse



```php
public hasResponse(): mixed
```











***

### getHandlerErrorData



```php
public getHandlerErrorData(): mixed
```











***

### getEffectiveUri



```php
public getEffectiveUri(): mixed
```











***

### getTransferTime



```php
public getTransferTime(): mixed
```











***

### getHandlerStats



```php
public getHandlerStats(): mixed
```











***

### getHandlerStat



```php
public getHandlerStat(mixed $stat): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stat` | **mixed** |  |




***


***

