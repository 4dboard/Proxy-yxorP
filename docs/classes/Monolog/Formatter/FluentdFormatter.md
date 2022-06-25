***

# FluentdFormatter

Class FluentdFormatter

Serializes a log message to Fluentd unix socket protocol

Fluentd config:

<source>
 type unix
 path /var/run/td-agent/td-agent.sock
</source>

Monolog setup:

$logger = new Monolog\Logger('fluent.tag');
$fluentHandler = new Monolog\Handler\SocketHandler('unix:///var/run/td-agent/td-agent.sock');
$fluentHandler->setFormatter(new Monolog\Formatter\FluentdFormatter());
$logger->pushHandler($fluentHandler);

* Full name: `\Monolog\Formatter\FluentdFormatter`
* This class implements:
[`\Monolog\Formatter\FormatterInterface`](./FormatterInterface.md)



## Properties


### levelTag



```php
protected bool $levelTag
```






***

## Methods


### __construct



```php
public __construct(mixed $levelTag = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levelTag` | **mixed** |  |




***

### isUsingLevelsInTag



```php
public isUsingLevelsInTag(): mixed
```











***

### format

Formats a log record.

```php
public format(array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | A record to format |


**Return Value:**

The formatted record



***

### formatBatch

Formats a set of log records.

```php
public formatBatch(array $records): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | A set of records to format |


**Return Value:**

The formatted set of records



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
