***

# AggregateHydrator

Aggregate hydrator that composes multiple hydrators via events

* Full name: `\Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator`
* Parent class: [`\Zend\Hydrator\Aggregate\AggregateHydrator`](../../../Hydrator/Aggregate/AggregateHydrator.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\HydratorInterface`](../HydratorInterface.md)

## Inherited methods

### add

Attaches the provided hydrator to the list of hydrators to be used while hydrating/extracting data

```php
public add(\Zend\Hydrator\HydratorInterface $hydrator, int $priority = self::DEFAULT_PRIORITY): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hydrator` | **\Zend\Hydrator\HydratorInterface** |  |
| `$priority` | **int** |  |

***

### extract

{@inheritDoc}

```php
public extract(mixed $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

***

### hydrate

{@inheritDoc}

```php
public hydrate(array $data, mixed $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$object` | **mixed** |  |

***

### setEventManager

Inject an EventManager instance

```php
public setEventManager(\Zend\EventManager\EventManagerInterface $eventManager): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventManager` | **\Zend\EventManager\EventManagerInterface** |  |

***

### getEventManager

{@inheritDoc}

```php
public getEventManager(): mixed
```

yxorP::get('REQUEST')
