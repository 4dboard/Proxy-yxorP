***

# Logger

Monolog log channel

It contains a stack of Handlers and a stack of Processors, and uses them to store records that are added to it.

* Full name: `\Monolog\Logger`
* This class implements:
  [`\Psr\Log\LoggerInterface`](../Psr/Log/LoggerInterface.md)
  , [`\Monolog\ResettableInterface`](./ResettableInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEBUG`|public| |100|
|`INFO`|public| |200|
|`NOTICE`|public| |250|
|`WARNING`|public| |300|
|`ERROR`|public| |400|
|`CRITICAL`|public| |500|
|`ALERT`|public| |550|
|`EMERGENCY`|public| |600|
|`API`|public|int|1|

## Properties

### levels

Logging levels from syslog protocol defined in RFC 5424

```php
protected static array $levels
```

* This property is **static**.

***

### timezone

```php
protected static \DateTimeZone $timezone
```

* This property is **static**.

***

### name

```php
protected string $name
```

***

### handlers

The handler stack

```php
protected \Monolog\Handler\HandlerInterface[] $handlers
```

***

### processors

Processors that will process all log records

```php
protected callable[] $processors
```

To process records of a single handler instead, add the processor on that specific handler




***

### microsecondTimestamps

```php
protected bool $microsecondTimestamps
```

***

### exceptionHandler

```php
protected callable $exceptionHandler
```

***

## Methods

### __construct

```php
public __construct(string $name, \Monolog\Handler\HandlerInterface[] $handlers = array(), callable[] $processors = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The logging channel |
| `$handlers` | **
\Monolog\Handler\HandlerInterface[]** | Optional stack of handlers, the first one in the array is called first, etc. |
| `$processors` | **callable[]** | Optional array of processors |

***

### getName

```php
public getName(): string
```

***

### withName

Return a new cloned instance with the name changed

```php
public withName(mixed $name): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### pushHandler

Pushes a handler on to the stack.

```php
public pushHandler(\Monolog\Handler\HandlerInterface $handler): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\Monolog\Handler\HandlerInterface** |  |

***

### popHandler

Pops a handler from the stack

```php
public popHandler(): \Monolog\Handler\HandlerInterface
```

***

### setHandlers

Set handlers, replacing all existing ones.

```php
public setHandlers(\Monolog\Handler\HandlerInterface[] $handlers): $this
```

If a map is passed, keys will be ignored.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handlers` | **\Monolog\Handler\HandlerInterface[]** |  |

***

### getHandlers

```php
public getHandlers(): \Monolog\Handler\HandlerInterface[]
```

***

### pushProcessor

Adds a processor on to the stack.

```php
public pushProcessor(callable $callback): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |

***

### popProcessor

Removes the processor on top of the stack and returns it.

```php
public popProcessor(): callable
```

***

### getProcessors

```php
public getProcessors(): callable[]
```

***

### useMicrosecondTimestamps

Control the use of microsecond resolution timestamps in the 'datetime' member of new records.

```php
public useMicrosecondTimestamps(bool $micro): mixed
```

Generating microsecond resolution timestamps by calling microtime(true), formatting the result via sprintf() and then
parsing the resulting string via \DateTime::createFromFormat() can incur a measurable runtime overhead vs simple usage
of DateTime to capture a second resolution timestamp in systems which generate a large number of log events.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$micro` | **bool** | True to use microtime() to create timestamps |

***

### addRecord

Adds a log record.

```php
public addRecord(int $level, string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** | The logging level |
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### close

Ends a log cycle and frees all resources used by handlers.

```php
public close(): mixed
```

Closing a Handler means flushing all buffers and freeing any open resources/handles. Handlers that have been closed
should be able to accept log records again and re-open themselves on demand, but this may not always be possible
depending on implementation.

This is useful at the end of a request and will be called automatically on every handler when they get destructed.









***

### reset

Ends a log cycle and resets all handlers and processors to their initial state.

```php
public reset(): mixed
```

Resetting a Handler or a Processor means flushing/cleaning all buffers, resetting internal state, and getting it back to
a state in which it can receive log records again.

This is useful in case you want to avoid logs leaking between two requests or jobs when you have a long running process
like a worker or an application server serving multiple requests in one process.









***

### addDebug

Adds a log record at the DEBUG level.

```php
public addDebug(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addInfo

Adds a log record at the INFO level.

```php
public addInfo(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addNotice

Adds a log record at the NOTICE level.

```php
public addNotice(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addWarning

Adds a log record at the WARNING level.

```php
public addWarning(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addError

Adds a log record at the ERROR level.

```php
public addError(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addCritical

Adds a log record at the CRITICAL level.

```php
public addCritical(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addAlert

Adds a log record at the ALERT level.

```php
public addAlert(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### addEmergency

Adds a log record at the EMERGENCY level.

```php
public addEmergency(string $message, array $context = array()): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### getLevels

Gets all supported logging levels.

```php
public static getLevels(): array
```

* This method is **static**.

**Return Value:**

Assoc array with human-readable level names => level codes.



***

### getLevelName

Gets the name of the logging level.

```php
public static getLevelName(int $level): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |

***

### toMonologLevel

Converts PSR-3 levels to Monolog ones if necessary

```php
public static toMonologLevel(string|int $level): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **string&#124;int** | Level number (monolog) or name (PSR-3) |

***

### isHandling

Checks whether the Logger has a handler that listens on the given level

```php
public isHandling(int $level): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |

***

### setExceptionHandler

Set a custom exception handler

```php
public setExceptionHandler(callable $callback): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |

***

### getExceptionHandler

```php
public getExceptionHandler(): callable
```

***

### handleException

Delegates exception management to the custom exception handler, or throws the exception if no custom handler is set.

```php
protected handleException(\Exception $e, array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |
| `$record` | **array** |  |

***

### log

Adds a log record at an arbitrary level.

```php
public log(mixed $level, string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** | The log level |
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### debug

Adds a log record at the DEBUG level.

```php
public debug(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### info

Adds a log record at the INFO level.

```php
public info(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### notice

Adds a log record at the NOTICE level.

```php
public notice(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### warn

Adds a log record at the WARNING level.

```php
public warn(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### warning

Adds a log record at the WARNING level.

```php
public warning(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### err

Adds a log record at the ERROR level.

```php
public err(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### error

Adds a log record at the ERROR level.

```php
public error(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### crit

Adds a log record at the CRITICAL level.

```php
public crit(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### critical

Adds a log record at the CRITICAL level.

```php
public critical(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### alert

Adds a log record at the ALERT level.

```php
public alert(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### emerg

Adds a log record at the EMERGENCY level.

```php
public emerg(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### emergency

Adds a log record at the EMERGENCY level.

```php
public emergency(string $message, array $context = array()): bool
```

This method allows for compatibility with common interfaces.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The log message |
| `$context` | **array** | The log context |

**Return Value:**

Whether the record has been processed



***

### setTimezone

Set the timezone to be used for the timestamp of log records.

```php
public static setTimezone(\DateTimeZone $tz): mixed
```

This is stored globally for all Logger instances

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tz` | **\DateTimeZone** | Timezone object |

yxorP::get('REQUEST')
