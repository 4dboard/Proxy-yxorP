***

# EventCollector

EventCollector handles "storeEventsAsEntities" for client entities.

Unlike EventObserver, this does not support ignoring command monitoring
events for specific commands. That said, internal/security commands that
bypass command monitoring will still be ignored.

* Full name: `\MongoDB\Tests\UnifiedSpecTests\EventCollector`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\MongoDB\Driver\Monitoring\CommandSubscriber`](../../Driver/Monitoring/CommandSubscriber.md)
* This class is a **Final class**



## Properties


### supportedEvents



```php
private static array $supportedEvents
```



* This property is **static**.


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

### collectEvents



```php
private array $collectEvents
```






***

### eventList



```php
private \MongoDB\Model\BSONArray $eventList
```






***

## Methods


### __construct



```php
public __construct(\MongoDB\Model\BSONArray $eventList, array $collectEvents, string $clientId, \MongoDB\Tests\UnifiedSpecTests\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventList` | **\MongoDB\Model\BSONArray** |  |
| `$collectEvents` | **array** |  |
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

### handleCommandMonitoringEvent



```php
private handleCommandMonitoringEvent(\MongoDB\Driver\Monitoring\CommandStartedEvent|\MongoDB\Driver\Monitoring\CommandSucceededEvent|\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent&#124;\MongoDB\Driver\Monitoring\CommandSucceededEvent&#124;\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |




***

### getConnectionId



```php
private static getConnectionId(\MongoDB\Driver\Monitoring\CommandStartedEvent|\MongoDB\Driver\Monitoring\CommandSucceededEvent|\MongoDB\Driver\Monitoring\CommandFailedEvent $event): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\MongoDB\Driver\Monitoring\CommandStartedEvent&#124;\MongoDB\Driver\Monitoring\CommandSucceededEvent&#124;\MongoDB\Driver\Monitoring\CommandFailedEvent** |  |




***

### getEventName



```php
private static getEventName(object $event): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **object** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
