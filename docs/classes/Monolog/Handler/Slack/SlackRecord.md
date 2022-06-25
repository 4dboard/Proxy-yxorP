***

# SlackRecord

Slack record utility helping to log to Slack webhooks or API.

* Full name: `\Monolog\Handler\Slack\SlackRecord`

**See Also:**

* https://api.slack.com/incoming-webhooks -
* https://api.slack.com/docs/message-attachments -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COLOR_DANGER`|public| |&#039;danger&#039;|
|`COLOR_WARNING`|public| |&#039;warning&#039;|
|`COLOR_GOOD`|public| |&#039;good&#039;|
|`COLOR_DEFAULT`|public| |&#039;#e3e4e6&#039;|

## Properties

### channel

Slack channel (encoded ID or name)

```php
private string|null $channel
```

***

### username

Name of a bot

```php
private string|null $username
```

***

### userIcon

User icon e.g. 'ghost', 'http://example.com/user.png'

```php
private string $userIcon
```

***

### useAttachment

Whether the message should be added to Slack as attachment (plain text otherwise)

```php
private bool $useAttachment
```

***

### useShortAttachment

Whether the the context/extra messages added to Slack as attachments are in a short style

```php
private bool $useShortAttachment
```

***

### includeContextAndExtra

Whether the attachment should include context and extra data

```php
private bool $includeContextAndExtra
```

***

### excludeFields

Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']

```php
private array $excludeFields
```

***

### formatter

```php
private \Monolog\Formatter\FormatterInterface $formatter
```

***

### normalizerFormatter

```php
private \Monolog\Formatter\NormalizerFormatter $normalizerFormatter
```

***

## Methods

### __construct

```php
public __construct(mixed $channel = null, mixed $username = null, mixed $useAttachment = true, mixed $userIcon = null, mixed $useShortAttachment = false, mixed $includeContextAndExtra = false, array $excludeFields = array(), \Monolog\Formatter\FormatterInterface $formatter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$channel` | **mixed** |  |
| `$username` | **mixed** |  |
| `$useAttachment` | **mixed** |  |
| `$userIcon` | **mixed** |  |
| `$useShortAttachment` | **mixed** |  |
| `$includeContextAndExtra` | **mixed** |  |
| `$excludeFields` | **array** |  |
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |

***

### getSlackData

```php
public getSlackData(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### getAttachmentColor

Returned a Slack message attachment color associated with provided level.

```php
public getAttachmentColor(int $level): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |

***

### stringify

Stringifies an array of key/value pairs to be used in attachment fields

```php
public stringify(array $fields): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **array** |  |

***

### setFormatter

Sets the formatter

```php
public setFormatter(\Monolog\Formatter\FormatterInterface $formatter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |

***

### generateAttachmentField

Generates attachment field

```php
private generateAttachmentField(string $title, string|array $value): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |
| `$value` | **string&#124;array** |  |

***

### generateAttachmentFields

Generates a collection of attachment fields from array

```php
private generateAttachmentFields(array $data): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |

***

### excludeFields

Get a copy of record with fields excluded according to $this->excludeFields

```php
private excludeFields(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

yxorP::get('REQUEST')
