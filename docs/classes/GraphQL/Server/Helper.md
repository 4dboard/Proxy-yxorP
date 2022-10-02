***

# Helper

Contains functionality that could be re-used by various server implementations

* Full name: `\GraphQL\Server\Helper`

## Methods

### parseHttpRequest

Parses HTTP request using PHP globals and returns GraphQL OperationParams
contained in this request. For batched requests it returns an array of OperationParams.

```php
public parseHttpRequest(?callable $readRawBodyFn = null): \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
```

This function does not check validity of these params
(validation is performed separately in validateOperationParams() method).

If $readRawBodyFn argument is not provided - will attempt to read raw request body
from `php://input` stream.

Internally it normalizes input to $method, $bodyParams and $queryParams and
calls `parseRequestParams()` to produce actual return value.

For PSR-7 request parsing use `parsePsrRequest()` instead.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readRawBodyFn` | **?callable** |  |

***

### parseRequestParams

Parses normalized request params and returns instance of OperationParams
or array of OperationParams in case of batch operation.

```php
public parseRequestParams(string $method, array $bodyParams, array $queryParams): \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
```

Returned value is a suitable input for `executeOperation` or `executeBatch` (if array)

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$bodyParams` | **array** |  |
| `$queryParams` | **array** |  |

***

### validateOperationParams

Checks validity of OperationParams extracted from HTTP request and returns an array of errors
if params are invalid (or empty array when params are valid)

```php
public validateOperationParams(\GraphQL\Server\OperationParams $params): array&lt;int,\GraphQL\Server\RequestError&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **\GraphQL\Server\OperationParams** |  |

***

### executeOperation

Executes GraphQL operation with given server configuration and returns execution result
(or promise when promise adapter is different from SyncPromiseAdapter)

```php
public executeOperation(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $op): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\Promise\Promise
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$op` | **\GraphQL\Server\OperationParams** |  |

***

### executeBatch

Executes batched GraphQL operations with shared promise queue
(thus, effectively batching deferreds|promises of all queries at once)

```php
public executeBatch(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams[] $operations): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$operations` | **\GraphQL\Server\OperationParams[]** |  |

***

### promiseToExecuteOperation

```php
private promiseToExecuteOperation(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $op, bool $isBatch = false): \GraphQL\Executor\Promise\Promise
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$op` | **\GraphQL\Server\OperationParams** |  |
| `$isBatch` | **bool** |  |

***

### loadPersistedQuery

```php
private loadPersistedQuery(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $operationParams): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$operationParams` | **\GraphQL\Server\OperationParams** |  |

***

### resolveValidationRules

```php
private resolveValidationRules(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType): array|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$params` | **\GraphQL\Server\OperationParams** |  |
| `$doc` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$operationType` | **string** |  |

***

### resolveRootValue

```php
private resolveRootValue(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$params` | **\GraphQL\Server\OperationParams** |  |
| `$doc` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$operationType` | **string** |  |

***

### resolveContextValue

```php
private resolveContextValue(\GraphQL\Server\ServerConfig $config, \GraphQL\Server\OperationParams $params, \GraphQL\Language\AST\DocumentNode $doc, string $operationType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig** |  |
| `$params` | **\GraphQL\Server\OperationParams** |  |
| `$doc` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$operationType` | **string** |  |

***

### sendResponse

Send response using standard PHP `header()` and `echo`.

```php
public sendResponse(\GraphQL\Executor\Promise\Promise|\GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[] $result, bool $exitWhenDone = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\GraphQL\Executor\Promise\Promise&#124;\GraphQL\Executor\ExecutionResult&#124;\GraphQL\Executor\ExecutionResult[]** |  |
| `$exitWhenDone` | **bool** |  |

***

### doSendResponse

```php
private doSendResponse(mixed $result, mixed $exitWhenDone): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |
| `$exitWhenDone` | **mixed** |  |

***

### emitResponse

```php
public emitResponse(array|\JsonSerializable $jsonSerializable, int $httpStatus, bool $exitWhenDone): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jsonSerializable` | **array&#124;\JsonSerializable** |  |
| `$httpStatus` | **int** |  |
| `$exitWhenDone` | **bool** |  |

***

### readRawBody

```php
private readRawBody(): bool|string
```

***

### resolveHttpStatus

```php
private resolveHttpStatus(\GraphQL\Executor\ExecutionResult|array $result): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\GraphQL\Executor\ExecutionResult&#124;array** |  |

***

### parsePsrRequest

Converts PSR-7 request to OperationParams[]

```php
public parsePsrRequest(\Psr\Http\Message\RequestInterface $request): \GraphQL\Server\OperationParams[]|\GraphQL\Server\OperationParams
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |

***

### decodeContent

```php
protected decodeContent(string $rawBody, string $contentType): array&lt;string,mixed&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawBody` | **string** |  |
| `$contentType` | **string** |  |

***

### toPsrResponse

Converts query execution result to PSR-7 response

```php
public toPsrResponse(\GraphQL\Executor\Promise\Promise|\GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[] $result, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream): \GraphQL\Executor\Promise\Promise|\Psr\Http\Message\ResponseInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **\GraphQL\Executor\Promise\Promise&#124;\GraphQL\Executor\ExecutionResult&#124;\GraphQL\Executor\ExecutionResult[]** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$writableBodyStream` | **\Psr\Http\Message\StreamInterface** |  |

***

### doConvertToPsrResponse

```php
private doConvertToPsrResponse(mixed $result, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **mixed** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$writableBodyStream` | **\Psr\Http\Message\StreamInterface** |  |

***


***

