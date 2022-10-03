***

# HandlerStack

Creates a composed Guzzle handler function by stacking middlewares on top of
an HTTP handler function.



* Full name: `\GuzzleHttp\HandlerStack`



## Properties


### handler



```php
private $handler
```






***

### stack



```php
private $stack
```






***

### cached



```php
private $cached
```






***

## Methods


### create

Creates a default handler stack that can be used by clients.

```php
public static create(?callable $handler = null): self
```

The returned handler will wrap the provided handler or use the most
appropriate default handler for your system. The returned HandlerStack has
support for cookies, redirects, HTTP error exceptions, and preparing a body
before sending.

The returned handler stack can be passed to a client in the "handler"
option.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **?callable** |  |




***

### __construct



```php
public __construct(callable $handler = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### __invoke

Invokes the handler stack as a composed handler

```php
public __invoke(\Psr\Http\Message\RequestInterface $request, array $options): \Psr\Http\Message\ResponseInterface|\GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### __toString

Dumps a string representation of the stack.

```php
public __toString(): string
```











***

### setHandler

Set the HTTP handler that actually returns a promise.

```php
public setHandler(callable $handler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### hasHandler

Returns true if the builder has a handler.

```php
public hasHandler(): bool
```











***

### unshift

Unshift a middleware to the bottom of the stack.

```php
public unshift(callable $middleware, string $name = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$middleware` | **callable** |  |
| `$name` | **string** | Name to register for this middleware. |




***

### push

Push a middleware to the top of the stack.

```php
public push(callable $middleware, string $name = &#039;&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$middleware` | **callable** |  |
| `$name` | **string** | Name to register for this middleware. |




***

### before

Add a middleware before another middleware by name.

```php
public before(string $findName, callable $middleware, string $withName = &#039;&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **string** | Middleware to find |
| `$middleware` | **callable** |  |
| `$withName` | **string** | Name to register for this middleware. |




***

### after

Add a middleware after another middleware by name.

```php
public after(string $findName, callable $middleware, string $withName = &#039;&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **string** | Middleware to find |
| `$middleware` | **callable** |  |
| `$withName` | **string** | Name to register for this middleware. |




***

### remove

Remove a middleware by instance or name from the stack.

```php
public remove(callable|string $remove): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$remove` | **callable&#124;string** | Middleware to remove by instance or name. |




***

### resolve

Compose the middleware and handler into a single callable function.

```php
public resolve(): callable
```











***

### findByName



```php
private findByName(string $name): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### splice

Splices a function into the middleware list at a specific position.

```php
private splice(string $findName, string $withName, callable $middleware, bool $before): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$findName` | **string** |  |
| `$withName` | **string** |  |
| `$middleware` | **callable** |  |
| `$before` | **bool** |  |




***

### debugCallable

Provides a debug string for a given callable.

```php
private debugCallable(callable|string $fn): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable&#124;string** | Function to write as a string. |




***


***

