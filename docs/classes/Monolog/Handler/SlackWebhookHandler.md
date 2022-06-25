***

# SlackWebhookHandler

Sends notifications through Slack Webhooks

* Full name: `\Monolog\Handler\SlackWebhookHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)

**See Also:**

* https://api.slack.com/incoming-webhooks -

## Properties

### webhookUrl

Slack Webhook token

```php
private string $webhookUrl
```

***

### slackRecord

Instance of the SlackRecord util class preparing data for Slack API.

```php
private \Monolog\Handler\Slack\SlackRecord $slackRecord
```

***

## Methods

### __construct

```php
public __construct(string $webhookUrl, string|null $channel = null, string|null $username = null, bool $useAttachment = true, string|null $iconEmoji = null, bool $useShortAttachment = false, bool $includeContextAndExtra = false, int $level = Logger::CRITICAL, bool $bubble = true, array $excludeFields = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$webhookUrl` | **string** | Slack Webhook URL |
| `$channel` | **string&#124;null** | Slack channel (encoded ID or name) |
| `$username` | **string&#124;null** | Name of a bot |
| `$useAttachment` | **bool** | Whether the message should be added to Slack as attachment (plain text otherwise) |
| `$iconEmoji` | **string&#124;null** | The emoji name to use (or null) |
| `$useShortAttachment` | **
bool** | Whether the the context/extra messages added to Slack as attachments are in a short style |
| `$includeContextAndExtra` | **bool** | Whether the attachment should include context and extra data |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$excludeFields` | **
array** | Dot separated list of fields to exclude from slack message. E.g. [&#039;context.field1&#039;, &#039;extra.field2&#039;] |

***

### getSlackRecord

```php
public getSlackRecord(): mixed
```

***

### getWebhookUrl

```php
public getWebhookUrl(): mixed
```

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

### setFormatter

```php
public setFormatter(\Monolog\Formatter\FormatterInterface $formatter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |

***

### getFormatter

```php
public getFormatter(): mixed
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
