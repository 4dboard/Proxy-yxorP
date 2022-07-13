***

# CommandExpectations

Spec test CommandStartedEvent expectations.

* Full name: `\MongoDB\Tests\SpecTests\CommandExpectations`
* This class implements:
  [`\MongoDB\Driver\Monitoring\CommandSubscriber`](../../Driver/Monitoring/CommandSubscriber.md)

## Properties

### actualEvents

```php
private array $actualEvents
```

***

### expectedEvents

```php
private array $expectedEvents
```

***

### ignoreCommandFailed

```php
private bool $ignoreCommandFailed
```

***

### ignoreCommandStarted

```php
private bool $ignoreCommandStarted
```

***

### ignoreCommandSucceeded

```php
private bool $ignoreCommandSucceeded
```

***

### ignoreExtraEvents

```php
private bool $ignoreExtraEvents
```

***

### ignoreKeyVaultListCollections

```php
private bool $ignoreKeyVaultListCollections
```

***

### ignoredCommandNames

```php
private string[] $ignoredCommandNames
```

***

## Methods

### __construct

```php
private __construct(array $events): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **array** |  |

***

### fromChangeStreams

```php
public static fromChangeStreams(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromClientSideEncryption

```php
public static fromClientSideEncryption(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromCommandMonitoring

```php
public static fromCommandMonitoring(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromCrud

```php
public static fromCrud(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromReadWriteConcern

```php
public static fromReadWriteConcern(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromRetryableReads

```php
public static fromRetryableReads(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### fromTransactions

```php
public static fromTransactions(array $expectedEvents): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |

***

### commandFailed

Not used.

```php
public commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |

**See Also:**

* https://www.php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandfailed.php -

***

### commandStarted

Tracks outgoing commands for spec test APM assertions.

```php
public commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent** |  |

**See Also:**

* https://www.php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandstarted.php -

***

### commandSucceeded

Not used.

```php
public commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandSucceededEvent** |  |

**See Also:**

* https://www.php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php -

***

### startMonitoring

Start command monitoring.

```php
public startMonitoring(): void
```

***

### stopMonitoring

Stop command monitoring.

```php
public stopMonitoring(): void
```

***

### assert

Assert that the command expectations match the monitored events.

```php
public assert(\MongoDB\Tests\SpecTests\FunctionalTestCase $test, \MongoDB\Tests\SpecTests\Context $context): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **\MongoDB\Tests\SpecTests\FunctionalTestCase** | Test instance |
| `$context` | **\MongoDB\Tests\SpecTests\Context** | Execution context |

***

### isEventIgnored

```php
private isEventIgnored(mixed $event): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **mixed** |  |

***


***

