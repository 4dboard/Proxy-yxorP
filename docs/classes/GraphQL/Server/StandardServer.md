***

# StandardServer

GraphQL server compatible with both: [express-graphql](https://github.com/graphql/express-graphql)
and [Apollo Server](https://github.com/apollographql/graphql-server).

Usage Example:

    $server = new StandardServer([
      'schema' => $mySchema
    ]);
    $server->handleRequest();

Or using [ServerConfig](reference.md#graphqlserverserverconfig) instance:

    $config = GraphQL\Server\ServerConfig::create()
        ->setSchema($mySchema)
        ->setContext($myContext);

    $server = new GraphQL\Server\StandardServer($config);
    $server->handleRequest();

See [dedicated section in docs](executing-queries.md#using-server) for details.

* Full name: `\GraphQL\Server\StandardServer`



## Properties


### config



```php
private \GraphQL\Server\ServerConfig $config
```






***

### helper



```php
private \GraphQL\Server\Helper $helper
```






***

## Methods


### send500Error

Converts and exception to error and sends spec-compliant HTTP 500 error.

```php
public static send500Error(\Throwable $error, int $debug = DebugFlag::NONE, bool $exitWhenDone = false): mixed
```

Useful when an exception is thrown somewhere outside of server execution context
(e.g. during schema instantiation).

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Throwable** |  |
| `$debug` | **int** |  |
| `$exitWhenDone` | **bool** |  |




***

### __construct

Creates new instance of a standard GraphQL HTTP server

```php
public __construct(\GraphQL\Server\ServerConfig|array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\GraphQL\Server\ServerConfig&#124;array** |  |




***

### handleRequest

Parses HTTP request, executes and emits response (using standard PHP `header` function and `echo`)

```php
public handleRequest(\GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[] $parsedBody = null, bool $exitWhenDone = false): mixed
```

By default (when $parsedBody is not set) it uses PHP globals to parse a request.
It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
and then pass it to the server.

See `executeRequest()` if you prefer to emit response yourself
(e.g. using Response object of some framework)






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parsedBody` | **\GraphQL\Server\OperationParams&#124;\GraphQL\Server\OperationParams[]** |  |
| `$exitWhenDone` | **bool** |  |




***

### executeRequest

Executes GraphQL operation and returns execution result
(or promise when promise adapter is different from SyncPromiseAdapter).

```php
public executeRequest(\GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[] $parsedBody = null): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
```

By default (when $parsedBody is not set) it uses PHP globals to parse a request.
It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
and then pass it to the server.

PSR-7 compatible method executePsrRequest() does exactly this.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parsedBody` | **\GraphQL\Server\OperationParams&#124;\GraphQL\Server\OperationParams[]** |  |




***

### processPsrRequest

Executes PSR-7 request and fulfills PSR-7 response.

```php
public processPsrRequest(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Psr\Http\Message\StreamInterface $writableBodyStream): \Psr\Http\Message\ResponseInterface|\GraphQL\Executor\Promise\Promise
```

See `executePsrRequest()` if you prefer to create response yourself
(e.g. using specific JsonResponse instance of some framework).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$writableBodyStream` | **\Psr\Http\Message\StreamInterface** |  |




***

### executePsrRequest

Executes GraphQL operation and returns execution result
(or promise when promise adapter is different from SyncPromiseAdapter)

```php
public executePsrRequest(\Psr\Http\Message\RequestInterface $request): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |




***

### getHelper

Returns an instance of Server helper, which contains most of the actual logic for
parsing / validating / executing request (which could be re-used by other server implementations)

```php
public getHelper(): \GraphQL\Server\Helper
```











***


***

