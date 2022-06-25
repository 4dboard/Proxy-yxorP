***

# ExceptionEvent

Representation of an event

Encapsulates the target context and parameters passed, and provides some behavior for interacting with the event
manager.

* Full name: `\Zend\Cache\Storage\ExceptionEvent`
* Parent class: [`\Zend\Cache\Storage\PostEvent`](./PostEvent.md)

## Properties

### exception

The exception to be thrown

```php
protected \Exception $exception
```

***

### throwException

Throw the exception or use the result

```php
protected bool $throwException
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $name, \Zend\Cache\Storage\StorageInterface $storage, \ArrayObject $params, mixed& $result, \Exception $exception): mixed
```

Accept a target and its parameters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$storage` | **\Zend\Cache\Storage\StorageInterface** |  |
| `$params` | **\ArrayObject** |  |
| `$result` | **mixed** |  |
| `$exception` | **\Exception** |  |

***

### setException

Set the exception to be thrown

```php
public setException(\Exception $exception): \Zend\Cache\Storage\ExceptionEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |

***

### getException

Get the exception to be thrown

```php
public getException(): \Exception
```

***

### setThrowException

Throw the exception or use the result

```php
public setThrowException(bool $flag): \Zend\Cache\Storage\ExceptionEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### getThrowException

Throw the exception or use the result

```php
public getThrowException(): bool
```

***

## Inherited methods

### __construct

Constructor

```php
public __construct(string $name = null, string|object $target = null, array|\ArrayAccess $params = null): mixed
```

Accept a target and its parameters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Event name |
| `$target` | **string&#124;object** |  |
| `$params` | **array&#124;\ArrayAccess** |  |

***

### setResult

Set the result/return value

```php
public setResult(mixed& $value): \Zend\Cache\Storage\PostEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### getResult

Get the result/return value

```php
public getResult(): mixed
```

***

### setTarget

Set the event target/context

```php
public setTarget(null|string|object $target): \Zend\EventManager\Event
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **null&#124;string&#124;object** |  |

***

### setStorage

Alias of setTarget

```php
public setStorage(\Zend\Cache\Storage\StorageInterface $storage): \Zend\Cache\Storage\Event
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **\Zend\Cache\Storage\StorageInterface** |  |

**See Also:**

* \Zend\Cache\Storage\Zend\EventManager\Event::setTarget() -

***

### getStorage

Alias of getTarget

```php
public getStorage(): \Zend\Cache\Storage\StorageInterface
```

***

### getName

Get event name

```php
public getName(): string
```

***

### getTarget

Get the event target

```php
public getTarget(): string|object
```

This may be either an object, or the name of a static method.









***

### setParams

Set parameters

```php
public setParams(array|\ArrayAccess|object $params): \Zend\EventManager\Event
```

Overwrites parameters

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array&#124;\ArrayAccess&#124;object** |  |

***

### getParams

Get all parameters

```php
public getParams(): array|object|\ArrayAccess
```

***

### getParam

Get an individual parameter

```php
public getParam(string|int $name, mixed $default = null): mixed
```

If the parameter does not exist, the $default value will be returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** |  |
| `$default` | **mixed** |  |

***

### setName

Set the event name

```php
public setName(string $name): \Zend\EventManager\Event
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### setParam

Set an individual parameter to a value

```php
public setParam(string|int $name, mixed $value): \Zend\EventManager\Event
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** |  |
| `$value` | **mixed** |  |

***

### stopPropagation

Stop further event propagation

```php
public stopPropagation(bool $flag = true): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### propagationIsStopped

Is propagation stopped?

```php
public propagationIsStopped(): bool
```

yxorP::get('REQUEST')
