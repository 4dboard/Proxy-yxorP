***

# TransferStats





* Full name: `\yxorP\proxy\TransferStats`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### request



```php
private \yxorP\psr\Http\Message\RequestInterface $request
```






***

### response



```php
private ?\yxorP\psr\Http\Message\ResponseInterface $response
```






***

### transferTime



```php
private mixed $transferTime
```






***

### handlerStats



```php
private array $handlerStats
```






***

### handlerErrorData



```php
private mixed $handlerErrorData
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response = null, mixed $transferTime = null, mixed $handlerErrorData = null, mixed $handlerStats = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$transferTime` | **mixed** |  |
| `$handlerErrorData` | **mixed** |  |
| `$handlerStats` | **mixed** |  |




***

### getRequest



```php
public getRequest(): \yxorP\psr\Http\Message\RequestInterface
```











***

### getResponse



```php
public getResponse(): ?\yxorP\psr\Http\Message\ResponseInterface
```











***

### hasResponse



```php
public hasResponse(): bool
```











***

### getHandlerErrorData



```php
public getHandlerErrorData(): mixed
```











***

### getEffectiveUri



```php
public getEffectiveUri(): \Psr\Http\Message\UriInterface
```











***

### getTransferTime



```php
public getTransferTime(): mixed
```











***

### getHandlerStats



```php
public getHandlerStats(): array
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
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
