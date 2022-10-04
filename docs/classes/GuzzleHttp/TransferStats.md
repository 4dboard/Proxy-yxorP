***

# TransferStats

Represents data at the point after it was transferred either successfully
or after a network error.

* Full name: `\GuzzleHttp\TransferStats`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### request

```php
private \Psr\Http\Message\RequestInterface $request
```

***

### response

```php
private \Psr\Http\Message\ResponseInterface|null $response
```

***

### transferTime

```php
private float|null $transferTime
```

***

### handlerStats

```php
private array $handlerStats
```

***

### handlerErrorData

```php
private mixed|null $handlerErrorData
```

***

## Methods

### __construct

```php
public __construct(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface|null $response = null, float|null $transferTime = null, mixed $handlerErrorData = null, array $handlerStats = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request that was sent. |
| `$response` | **\Psr\Http\Message\ResponseInterface&#124;null** | Response received (if any) |
| `$transferTime` | **float&#124;null** | Total handler transfer time. |
| `$handlerErrorData` | **mixed** | Handler error data. |
| `$handlerStats` | **array** | Handler specific stats. |

***

### getRequest

```php
public getRequest(): \Psr\Http\Message\RequestInterface
```

***

### getResponse

Returns the response that was received (if any).

```php
public getResponse(): ?\Psr\Http\Message\ResponseInterface
```

***

### hasResponse

Returns true if a response was received.

```php
public hasResponse(): bool
```

***

### getHandlerErrorData

Gets handler specific error data.

```php
public getHandlerErrorData(): mixed
```

This might be an exception, a integer representing an error code, or
anything else. Relying on this value assumes that you know what handler
you are using.









***

### getEffectiveUri

Get the effective URI the request was sent to.

```php
public getEffectiveUri(): \Psr\Http\Message\UriInterface
```

***

### getTransferTime

Get the estimated time the request was being transferred by the handler.

```php
public getTransferTime(): float|null
```

**Return Value:**

Time in seconds.



***

### getHandlerStats

Gets an array of all of the handler specific transfer data.

```php
public getHandlerStats(): array
```

***

### getHandlerStat

Get a specific handler statistic from the handler by name.

```php
public getHandlerStat(string $stat): mixed|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stat` | **string** | Handler specific transfer stat to retrieve. |

***


***

