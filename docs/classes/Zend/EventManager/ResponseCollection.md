***

# ResponseCollection

Collection of signal handler return values

* Full name: `\Zend\EventManager\ResponseCollection`
* Parent class: [`SplStack`](../../SplStack.md)

## Properties

### stopped

```php
protected $stopped
```

***

## Methods

### stopped

Did the last response provided trigger a short circuit of the stack?

```php
public stopped(): bool
```

***

### setStopped

Mark the collection as stopped (or its opposite)

```php
public setStopped(bool $flag): \Zend\EventManager\ResponseCollection
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### first

Convenient access to the first handler return value.

```php
public first(): mixed
```

**Return Value:**

The first handler return value



***

### last

Convenient access to the last handler return value.

```php
public last(): mixed
```

If the collection is empty, returns null. Otherwise, returns value returned by last handler.

**Return Value:**

The last handler return value



***

### contains

Check if any of the responses match the given value.

```php
public contains(mixed $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to look for among responses |

yxorP::get('REQUEST')
