***

# EventObserver

EventObserver handles "observeEvents" for client entities and assertions for
"expectEvents" and special operations (e.g. assertSameLsidOnLastTwoCommands).



* Full name: `\MongoDB\Tests\UnifiedSpecTests\EventObserver`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\MongoDB\Driver\Monitoring\CommandSubscriber`](../../Driver/Monitoring/CommandSubscriber.md)
* This class is a **Final class**



## Properties


### sensitiveCommands

These commands are always considered sensitive (i.e. command and reply
documents should be redacted).

```php
private static array $sensitiveCommands
```



* This property is **static**.

**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/command-monitoring/command-monitoring.rst#security - 

***

### sensitiveCommandsWithSpeculativeAuthenticate

These commands are only considered sensitive when the command or reply
document includes a speculativeAuthenticate field.

```php
private static array $sensitiveCommandsWithSpeculativeAuthenticate
```



* This property is **static**.

**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/command-monitoring/command-monitoring.rst#security - 

***

### supportedEvents



```php
private static array $supportedEvents
```



* This property is **static**.


***

### unsupportedEvents

These events are defined in the specification but unsupported by PHPLIB
(e.g. CMAP events).

```php
private static array $unsupportedEvents
```



* This property is **static**.


***

### actualEvents



```php
private array $actualEvents
```






***

### clientId



```php
private string $clientId
```






***

### context



```php
private \MongoDB\Tests\UnifiedSpecTests\Context $context
```






***

### ignoreCommands

The configureFailPoint command (used by failPoint and targetedFailPoint
operations) is always ignored.

```php
private array $ignoreCommands
```






***

### observeEvents



```php
private array $observeEvents
```






***

### observeSensitiveCommands



```php
private bool $observeSensitiveCommands
```






***

## Methods


### __construct



```php
public __construct(array $observeEvents, array $ignoreCommands, bool $observeSensitiveCommands, string $clientId, \MongoDB\Tests\UnifiedSpecTests\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$observeEvents` | **array** |  |
| `$ignoreCommands` | **array** |  |
| `$observeSensitiveCommands` | **bool** |  |
| `$clientId` | **string** |  |
| `$context` | **\MongoDB\Tests\UnifiedSpecTests\Context** |  |




***

### commandFailed



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

### start



```php
public start(): void
```











***

### stop



```php
public stop(): void
```











***

### getLsidsOnLastTwoCommands



```php
public getLsidsOnLastTwoCommands(): array
```











***

### assert



```php
public assert(array $expectedEvents): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEvents` | **array** |  |




***

### assertEvent



```php
private assertEvent(mixed $actual, \stdClass $expected, string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actual` | **mixed** |  |
| `$expected` | **\stdClass** |  |
| `$message` | **string** |  |




***

### assertCommandStartedEvent



```php
private assertCommandStartedEvent(\MongoDB\Driver\Monitoring\CommandStartedEvent $actual, \stdClass $expected, string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actual` | **\MongoDB\Driver\Monitoring\CommandStartedEvent** |  |
| `$expected` | **\stdClass** |  |
| `$message` | **string** |  |




***

### assertCommandSucceededEvent



```php
private assertCommandSucceededEvent(\MongoDB\Driver\Monitoring\CommandSucceededEvent $actual, \stdClass $expected, string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actual` | **\MongoDB\Driver\Monitoring\CommandSucceededEvent** |  |
| `$expected` | **\stdClass** |  |
| `$message` | **string** |  |




***

### assertCommandFailedEvent



```php
private assertCommandFailedEvent(\MongoDB\Driver\Monitoring\CommandFailedEvent $actual, \stdClass $expected, string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actual` | **\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |
| `$expected` | **\stdClass** |  |
| `$message` | **string** |  |




***

### handleEvent



```php
private handleEvent(\MongoDB\Driver\Monitoring\CommandStartedEvent|\MongoDB\Driver\Monitoring\CommandSucceededEvent|\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent&#124;\MongoDB\Driver\Monitoring\CommandSucceededEvent&#124;\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |




***

### isSensitiveCommand



```php
private isSensitiveCommand(\MongoDB\Driver\Monitoring\CommandStartedEvent|\MongoDB\Driver\Monitoring\CommandSucceededEvent|\MongoDB\Driver\Monitoring\CommandFailedEvent $event): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent&#124;\MongoDB\Driver\Monitoring\CommandSucceededEvent&#124;\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |




***


***

