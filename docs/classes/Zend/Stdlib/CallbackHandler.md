***

# CallbackHandler

CallbackHandler

A handler for an event, event, filterchain, etc. Abstracts PHP callbacks, primarily to allow for lazy-loading and
ensuring availability of default arguments (currying).

This was primarily used in zend-eventmanager for managing listeners; as that component removes its usage of this class
for v3, it is deprecated.

* Full name: `\Zend\Stdlib\CallbackHandler`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### callback

```php
protected string|array|callable $callback
```

***

### metadata

Callback metadata, if any

```php
protected array $metadata
```

***

## Methods

### __construct

Constructor

```php
public __construct(string|array|object|callable $callback, array $metadata = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **string&#124;array&#124;object&#124;callable** | PHP callback |
| `$metadata` | **array** | Callback metadata |

***

### registerCallback

Registers the callback provided in the constructor

```php
protected registerCallback(callable $callback): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |

***

### getCallback

Retrieve registered callback

```php
public getCallback(): callable
```

***

### call

Invoke handler

```php
public call(array $args = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Arguments to pass to callback |

***

### __invoke

Invoke as functor

```php
public __invoke(): mixed
```

***

### getMetadata

Get all callback metadata

```php
public getMetadata(): array
```

***

### getMetadatum

Retrieve a single metadatum

```php
public getMetadatum(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### validateStringCallbackFor54

Validate a static method call

```php
protected validateStringCallbackFor54(string $callback): true|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **string** |  |

yxorP::get('REQUEST')
