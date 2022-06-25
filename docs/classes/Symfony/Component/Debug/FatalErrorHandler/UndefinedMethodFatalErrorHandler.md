***

# UndefinedMethodFatalErrorHandler

ErrorHandler for undefined methods.

* Full name: `\Symfony\Component\Debug\FatalErrorHandler\UndefinedMethodFatalErrorHandler`
* This class implements:
  [`\Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface`](./FatalErrorHandlerInterface.md)

## Methods

### handleError

Attempts to convert an error into an exception.

```php
public handleError(array $error, \Symfony\Component\Debug\Exception\FatalErrorException $exception): \Symfony\Component\Debug\Exception\FatalErrorException|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **array** | An array as returned by error_get_last() |
| `$exception` | **\Symfony\Component\Debug\Exception\FatalErrorException** | A FatalErrorException instance |

**Return Value:**

A FatalErrorException instance if the class is able to convert the error, null otherwise yxorP::get('REQUEST')
