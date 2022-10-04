***

# ErrorListener

* Full name: `\Symfony\Component\Console\EventListener\ErrorListener`
* This class implements:
  [`\Symfony\Component\EventDispatcher\EventSubscriberInterface`](../../EventDispatcher/EventSubscriberInterface.md)

## Properties

### logger

```php
private $logger
```

***

## Methods

### __construct

```php
public __construct(\Psr\Log\LoggerInterface $logger = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Psr\Log\LoggerInterface** |  |

***

### onConsoleError

```php
public onConsoleError(\Symfony\Component\Console\Event\ConsoleErrorEvent $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Symfony\Component\Console\Event\ConsoleErrorEvent** |  |

***

### onConsoleTerminate

```php
public onConsoleTerminate(\Symfony\Component\Console\Event\ConsoleTerminateEvent $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Symfony\Component\Console\Event\ConsoleTerminateEvent** |  |

***

### getSubscribedEvents

```php
public static getSubscribedEvents(): mixed
```

* This method is **static**.

***

### getInputString

```php
private static getInputString(\Symfony\Component\Console\Event\ConsoleEvent $event): ?string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Symfony\Component\Console\Event\ConsoleEvent** |  |

***


***

