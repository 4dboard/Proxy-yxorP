***

# HandlerWrapper

This simple wrapper class can be used to extend handlers functionality.

Example: A custom filtering that can be applied to any handler.

Inherit from this class and override handle() like this:

public function handle(array $record)
{ if ($record meets certain conditions) { return false; } return $this->handler->handle($record); }

* Full name: `\Monolog\Handler\HandlerWrapper`
* This class implements:
  [`\Monolog\Handler\HandlerInterface`](./HandlerInterface.md)
  , [`\Monolog\ResettableInterface`](../ResettableInterface.md)

## Properties

### handler

```php
protected \Monolog\Handler\HandlerInterface $handler
```

***

## Methods

### __construct

HandlerWrapper constructor.

```php
public __construct(\Monolog\Handler\HandlerInterface $handler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\Monolog\Handler\HandlerInterface** |  |

***

### isHandling

Checks whether the given record will be handled by this handler.

```php
public isHandling(array $record): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | Partial log record containing only a level key |

***

### handle

Handles a record.

```php
public handle(array $record): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | The record to handle |

**Return Value:**

true means that this handler handled the record, and that bubbling is not permitted. false means the record was either
not processed or that this handler allows bubbling.



***

### handleBatch

Handles a set of records at once.

```php
public handleBatch(array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | The records to handle (an array of record arrays) |

***

### pushProcessor

Adds a processor in the stack.

```php
public pushProcessor(mixed $callback): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** |  |

***

### popProcessor

Removes the processor on top of the stack and returns it.

```php
public popProcessor(): callable
```

***

### setFormatter

Sets the formatter.

```php
public setFormatter(\Monolog\Formatter\FormatterInterface $formatter): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |

***

### getFormatter

Gets the formatter.

```php
public getFormatter(): \Monolog\Formatter\FormatterInterface
```

***

### reset

```php
public reset(): mixed
```

yxorP::get('REQUEST')
