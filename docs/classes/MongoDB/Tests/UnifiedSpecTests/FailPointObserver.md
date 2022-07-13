***

# FailPointObserver





* Full name: `\MongoDB\Tests\UnifiedSpecTests\FailPointObserver`
* This class implements:
[`\MongoDB\Driver\Monitoring\CommandSubscriber`](../../Driver/Monitoring/CommandSubscriber.md)



## Properties


### failPointsAndServers



```php
private array $failPointsAndServers
```






***

## Methods


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

### disableFailPoints



```php
public disableFailPoints(): void
```











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


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
