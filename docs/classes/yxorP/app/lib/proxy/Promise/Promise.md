***

# promise

* Full name: `\yxorP\app\lib\proxy\promise\promise`
* This class implements:
  [`\yxorP\app\lib\proxy\promise\promiseInterface`](./promiseInterface.md)

## Properties

### state

```php
private $state
```

***

### result

```php
private $result
```

***

### cancelFn

```php
private $cancelFn
```

***

### waitFn

```php
private $waitFn
```

***

### waitList

```php
private $waitList
```

***

### handlers

```php
private $handlers
```

***

## Methods

### __construct

```php
public __construct(callable $waitFn = null, callable $cancelFn = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$waitFn` | **callable** |  |
| `$cancelFn` | **callable** |  |

***

### resolve

```php
public resolve(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### settle

```php
private settle(mixed $state, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |
| `$value` | **mixed** |  |

***

### callHandler

```php
private static callHandler(mixed $index, mixed $value, array $handler): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |
| `$value` | **mixed** |  |
| `$handler` | **array** |  |

***

### getState

```php
public getState(): mixed
```

***

### otherwise

```php
public otherwise(callable $onRejected): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onRejected` | **callable** |  |

***

### then

```php
public then(callable $onFulfilled = null, callable $onRejected = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$onFulfilled` | **callable** |  |
| `$onRejected` | **callable** |  |

***

### wait

```php
public wait(mixed $unwrap = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unwrap` | **mixed** |  |

***

### waitIfPending

```php
private waitIfPending(): mixed
```

***

### invokeWaitFn

```php
private invokeWaitFn(): mixed
```

***

### reject

```php
public reject(mixed $reason): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |

***

### invokeWaitList

```php
private invokeWaitList(): mixed
```

***

### cancel

```php
public cancel(): mixed
```

***


***

