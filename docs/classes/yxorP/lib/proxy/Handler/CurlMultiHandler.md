***

# CurlMultiHandler

Returns an asynchronous response using curl_multi_* functions.

When using the CurlMultiHandler, custom curl options can be specified as an
associative array of curl option constants mapping to values in the
**curl** key of the provided request options.

* Full name: `\yxorP\lib\proxy\Handler\CurlMultiHandler`



## Properties


### factory



```php
private \yxorP\lib\proxy\Handler\CurlFactoryInterface $factory
```






***

### selectTimeout



```php
private $selectTimeout
```






***

### active



```php
private $active
```






***

### handles



```php
private $handles
```






***

### delays



```php
private $delays
```






***

### options



```php
private $options
```






***

## Methods


### __construct

This handler accepts the following options:

```php
public __construct(array $options = []): mixed
```

- handle_factory: An optional factory  used to create curl handles
- select_timeout: Optional timeout (in seconds) to block before timing
  out while selecting curl handles. Defaults to 1 second.
- options: An associative array of CURLMOPT_* options and
  corresponding values for curl_multi_setopt()






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __destruct



```php
public __destruct(): mixed
```











***

### __invoke



```php
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### tick

Ticks the curl event loop.

```php
public tick(): mixed
```











***

### execute

Runs until all outstanding connections have completed.

```php
public execute(): mixed
```











***

### addRequest



```php
private addRequest(array $entry): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entry` | **array** |  |




***

### cancel

Cancels a handle from sending and removes references to it.

```php
private cancel(int $id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** | Handle ID to cancel and remove. |


**Return Value:**

True on success, false on failure.



***

### processMessages



```php
private processMessages(): mixed
```











***

### timeToNext



```php
private timeToNext(): mixed
```











***


***

