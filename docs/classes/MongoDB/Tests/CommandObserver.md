***

# CommandObserver

Observes command documents using the driver's monitoring API.

* Full name: `\MongoDB\Tests\CommandObserver`
* This class implements:
  [`\MongoDB\Driver\Monitoring\CommandSubscriber`](../Driver/Monitoring/CommandSubscriber.md)

## Properties

### commands

```php
private array $commands
```

***

## Methods

### observe

```php
public observe(callable $execution, callable $commandCallback): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$execution` | **callable** |  |
| `$commandCallback` | **callable** |  |

***

### commandStarted

```php
public commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent** |  |

***

### commandSucceeded

```php
public commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandSucceededEvent** |  |

***

### commandFailed

```php
public commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |

***


***

