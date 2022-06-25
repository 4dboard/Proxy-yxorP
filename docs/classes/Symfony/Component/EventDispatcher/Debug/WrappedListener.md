***

# WrappedListener

* Full name: `\Symfony\Component\EventDispatcher\Debug\WrappedListener`

## Properties

### listener

```php
private $listener
```

***

### name

```php
private $name
```

***

### called

```php
private $called
```

***

### stoppedPropagation

```php
private $stoppedPropagation
```

***

### stopwatch

```php
private $stopwatch
```

***

### dispatcher

```php
private $dispatcher
```

***

## Methods

### __construct

```php
public __construct(mixed $listener, mixed $name, \Symfony\Component\Stopwatch\Stopwatch $stopwatch, \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listener` | **mixed** |  |
| `$name` | **mixed** |  |
| `$stopwatch` | **\Symfony\Component\Stopwatch\Stopwatch** |  |
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |

***

### getWrappedListener

```php
public getWrappedListener(): mixed
```

***

### wasCalled

```php
public wasCalled(): mixed
```

***

### stoppedPropagation

```php
public stoppedPropagation(): mixed
```

***

### __invoke

```php
public __invoke(\Symfony\Component\EventDispatcher\Event $event, mixed $eventName, \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Symfony\Component\EventDispatcher\Event** |  |
| `$eventName` | **mixed** |  |
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |

yxorP::get('REQUEST')
