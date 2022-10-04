***

# ConnectException

Exception thrown when a connection cannot be established.

Note that no response is present for a ConnectException

* Full name: `\GuzzleHttp\Exception\ConnectException`
* Parent class: [`\GuzzleHttp\Exception\TransferException`](./TransferException.md)
* This class implements:
  [`\Psr\Http\Client\NetworkExceptionInterface`](../../Psr/Http/Client/NetworkExceptionInterface.md)

## Properties

### request

```php
private \Psr\Http\Message\RequestInterface $request
```

***

### handlerContext

```php
private array $handlerContext
```

***

## Methods

### __construct

```php
public __construct(string $message, \Psr\Http\Message\RequestInterface $request, \Throwable $previous = null, array $handlerContext = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$previous` | **\Throwable** |  |
| `$handlerContext` | **array** |  |

***

### getRequest

Get the request that caused the exception

```php
public getRequest(): \Psr\Http\Message\RequestInterface
```

***

### getHandlerContext

Get contextual information about the error from the underlying handler.

```php
public getHandlerContext(): array
```

The contents of this array will vary depending on which handler you are
using. It may also be just an empty array. Relying on this data will
couple you to a specific handler, but can give more debug information
when needed.









***


***

