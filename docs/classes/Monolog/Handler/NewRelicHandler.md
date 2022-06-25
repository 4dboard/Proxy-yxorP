***

# NewRelicHandler

Class to record a log on a NewRelic application.

Enabling New Relic High Security mode may prevent capture of useful information.

This handler requires a NormalizerFormatter to function and expects an array in $record['formatted']

* Full name: `\Monolog\Handler\NewRelicHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)

**See Also:**

* https://docs.newrelic.com/docs/agents/php-agent -
* https://docs.newrelic.com/docs/accounts-partnerships/accounts/security/high-security -

## Properties

### appName

Name of the New Relic application that will receive logs from this handler.

```php
protected string $appName
```

***

### transactionName

Name of the current transaction

```php
protected string $transactionName
```

***

### explodeArrays

Some context and extra data is passed into the handler as arrays of values. Do we send them as is
(useful if we are using the API), or explode them for display on the NewRelic RPM website?

```php
protected bool $explodeArrays
```

***

## Methods

### __construct

{@inheritDoc}

```php
public __construct(mixed $level = Logger::ERROR, mixed $bubble = true, string $appName = null, bool $explodeArrays = false, string $transactionName = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$bubble` | **mixed** |  |
| `$appName` | **string** |  |
| `$explodeArrays` | **bool** |  |
| `$transactionName` | **string** |  |

***

### write

Writes the record down to the log of the implementing handler

```php
protected write(array $record): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### isNewRelicEnabled

Checks whether the NewRelic extension is enabled in the system.

```php
protected isNewRelicEnabled(): bool
```

***

### getAppName

Returns the appname where this log should be sent. Each log can override the default appname, set in this handler's
constructor, by providing the appname in it's context.

```php
protected getAppName(array $context): null|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** |  |

***

### getTransactionName

Returns the name of the current transaction. Each log can override the default transaction name, set in this handler's
constructor, by providing the transaction_name in it's context

```php
protected getTransactionName(array $context): null|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **array** |  |

***

### setNewRelicAppName

Sets the NewRelic application that should receive this log.

```php
protected setNewRelicAppName(string $appName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appName` | **string** |  |

***

### setNewRelicTransactionName

Overwrites the name of the current transaction

```php
protected setNewRelicTransactionName(string $transactionName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transactionName` | **string** |  |

***

### setNewRelicParameter

```php
protected setNewRelicParameter(string $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### getDefaultFormatter

{@inheritDoc}

```php
protected getDefaultFormatter(): mixed
```

***

## Inherited methods

### handle

{@inheritdoc}

```php
public handle(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### write

Writes the record down to the log of the implementing handler

```php
protected write(array $record): void
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### processRecord

Processes a record.

```php
protected processRecord(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### __construct

```php
public __construct(int|string $level = Logger::DEBUG, bool $bubble = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int&#124;string** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |

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

### close

Closes the handler.

```php
public close(): mixed
```

This will be called automatically when the object is destroyed









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

### setLevel

Sets minimum logging level at which this handler will be triggered.

```php
public setLevel(int|string $level): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int&#124;string** | Level or level name |

***

### getLevel

Gets minimum logging level at which this handler will be triggered.

```php
public getLevel(): int
```

***

### setBubble

Sets the bubbling behavior.

```php
public setBubble(bool $bubble): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bubble` | **
bool** | true means that this handler allows bubbling.<br />false means that bubbling is not permitted. |

***

### getBubble

Gets the bubbling behavior.

```php
public getBubble(): bool
```

**Return Value:**

true means that this handler allows bubbling. false means that bubbling is not permitted.



***

### __destruct

```php
public __destruct(): mixed
```

***

### reset

```php
public reset(): mixed
```

***

### getDefaultFormatter

Gets the default formatter.

```php
protected getDefaultFormatter(): \Monolog\Formatter\FormatterInterface
```

yxorP::get('REQUEST')
