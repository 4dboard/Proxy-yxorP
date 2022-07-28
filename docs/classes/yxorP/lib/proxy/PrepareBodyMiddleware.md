***

# PrepareBodyMiddleware

Prepares requests that contain a body, adding the Content-Length,
Content-Type, and Expect headers.



* Full name: `\yxorP\lib\proxy\PrepareBodyMiddleware`



## Properties


### nextHandler



```php
private callable $nextHandler
```






***

## Methods


### __construct



```php
public __construct(callable $nextHandler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nextHandler` | **callable** | Next handler to invoke. |




***

### __invoke



```php
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): \yxorP\lib\proxy\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### addExpectHeader

Add expect header

```php
private addExpectHeader(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, array& $modify): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$modify` | **array** |  |




***


***

