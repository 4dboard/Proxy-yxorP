***

# HydratingIteratorIterator

* Full name: `\Zend\Hydrator\Iterator\HydratingIteratorIterator`
* Parent class: [`IteratorIterator`](../../../IteratorIterator.md)
* This class implements:
  [`\Zend\Hydrator\Iterator\HydratingIteratorInterface`](./HydratingIteratorInterface.md)

## Properties

### hydrator

```php
protected \Zend\Hydrator\HydratorInterface $hydrator
```

***

### prototype

```php
protected object $prototype
```

***

## Methods

### __construct

```php
public __construct(\Zend\Hydrator\HydratorInterface $hydrator, \Iterator $data, string|object $prototype): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |
| `$data` | **\Iterator** |  |
| `$prototype` | **string&#124;object** | Object or class name to use for prototype. |

***

### setPrototype

This sets the prototype to hydrate.

```php
public setPrototype(mixed $prototype): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prototype` | **mixed** |  |

***

### setHydrator

Sets the hydrator to use during iteration.

```php
public setHydrator(\Zend\Hydrator\HydratorInterface $hydrator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |

***

### current

```php
public current(): object
```

**Return Value:**

Returns hydrated clone of $prototype yxorP::get('REQUEST')
