***

# Promise

Convenience wrapper for promises represented by Promise Adapter



* Full name: `\GraphQL\Executor\Promise\Promise`



## Properties


### adoptedPromise



```php
public \GraphQL\Executor\Promise\Adapter\SyncPromise|\React\Promise\Promise $adoptedPromise
```






***

### adapter



```php
private \GraphQL\Executor\Promise\PromiseAdapter $adapter
```






***

## Methods


### __construct



```php
public __construct(mixed $adoptedPromise, \GraphQL\Executor\Promise\PromiseAdapter $adapter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adoptedPromise` | **mixed** |  |
| `$adapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |




***

### then



```php
public then(?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onFulfilled` | **?callable** |  |
| `$onRejected` | **?callable** |  |




***


***

