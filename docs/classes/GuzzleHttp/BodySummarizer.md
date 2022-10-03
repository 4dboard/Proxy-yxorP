***

# BodySummarizer





* Full name: `\GuzzleHttp\BodySummarizer`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\GuzzleHttp\BodySummarizerInterface`](./BodySummarizerInterface.md)
* This class is a **Final class**



## Properties


### truncateAt



```php
private int|null $truncateAt
```






***

## Methods


### __construct



```php
public __construct(int $truncateAt = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$truncateAt` | **int** |  |




***

### summarize

Returns a summarized message body.

```php
public summarize(\Psr\Http\Message\MessageInterface $message): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\Psr\Http\Message\MessageInterface** |  |




***


***

