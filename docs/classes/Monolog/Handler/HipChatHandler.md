***

# HipChatHandler

Sends notifications through the hipchat api to a hipchat room

Notes:
API token - HipChat API token
Room      - HipChat Room Id or name, where messages are sent
Name      - Name used to send the message (from)
notify    - Should the message trigger a notification in the clients
version   - The API version to use (HipChatHandler::API_V1 | HipChatHandler::API_V2)

* Full name: `\Monolog\Handler\HipChatHandler`
* Parent class: [`\Monolog\Handler\SocketHandler`](./SocketHandler.md)

**See Also:**

* https://www.hipchat.com/docs/api - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`API_V1`|public| |&#039;v1&#039;|
|`API_V2`|public| |&#039;v2&#039;|
|`MAXIMUM_NAME_LENGTH`|public| |15|
|`MAXIMUM_MESSAGE_LENGTH`|public| |9500|

## Properties


### token



```php
private string $token
```






***

### room



```php
private string $room
```






***

### name



```php
private string $name
```






***

### notify



```php
private bool $notify
```






***

### format



```php
private string $format
```






***

### host



```php
private string $host
```






***

### version



```php
private string $version
```






***

## Methods


### __construct



```php
public __construct(string $token, string $room, string $name = &#039;Monolog&#039;, bool $notify = false, int $level = Logger::CRITICAL, bool $bubble = true, bool $useSSL = true, string $format = &#039;text&#039;, string $host = &#039;api.hipchat.com&#039;, string $version = self::API_V1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | HipChat API Token |
| `$room` | **string** | The room that should be alerted of the message (Id or Name) |
| `$name` | **string** | Name used in the &quot;from&quot; field. |
| `$notify` | **bool** | Trigger a notification in clients or not |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$useSSL` | **bool** | Whether to connect via SSL. |
| `$format` | **string** | The format of the messages (default to text, can be set to html if you have html in the messages) |
| `$host` | **string** | The HipChat server hostname. |
| `$version` | **string** | The HipChat API version (default HipChatHandler::API_V1) |




***

### generateDataStream



```php
protected generateDataStream(array $record): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### buildContent

Builds the body of API call

```php
private buildContent(array $record): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### buildHeader

Builds the header of the API Call

```php
private buildHeader(string $content): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### getAlertColor

Assigns a color to each level of log records.

```php
protected getAlertColor(int $level): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |




***

### write

Connect (if necessary) and write to the socket

```php
protected write(array $record): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### finalizeWrite

Finalizes the request by reading some bytes and then closing the socket

```php
protected finalizeWrite(): mixed
```

If we do not read some but close the socket too early, hipchat sometimes
drops the request entirely.









***

### handleBatch

{@inheritdoc}

```php
public handleBatch(array $records): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |




***

### combineRecords

Combines multiple records into one. Error level of the combined record
will be the highest level from the given records. Datetime will be taken
from the first record.

```php
private combineRecords(array $records): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |




***

### validateStringLength

Validates the length of a string.

```php
private validateStringLength(string $str, int $length): bool
```

If the `mb_strlen()` function is available, it will use that, as HipChat
allows UTF-8 characters. Otherwise, it will fall back to `strlen()`.

Note that this might cause false failures in the specific case of using
a valid name with less than 16 characters, but 16 or more bytes, on a
system where `mb_strlen()` is unavailable.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |
| `$length` | **int** |  |




***


## Inherited methods


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

### close

Closes the handler.

```php
public close(): mixed
```

This will be called automatically when the object is destroyed









***

### closeSocket

Close socket, if open

```php
public closeSocket(): mixed
```











***

### setPersistent

Set socket connection to nbe persistent. It only has effect before the connection is initiated.

```php
public setPersistent(bool $persistent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistent` | **bool** |  |




***

### setConnectionTimeout

Set connection timeout.  Only has effect before we connect.

```php
public setConnectionTimeout(float $seconds): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |



**See Also:**

* http://php.net/manual/en/function.fsockopen.php - 

***

### setTimeout

Set write timeout. Only has effect before we connect.

```php
public setTimeout(float $seconds): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |



**See Also:**

* http://php.net/manual/en/function.stream-set-timeout.php - 

***

### setWritingTimeout

Set writing timeout. Only has effect during connection in the writing cycle.

```php
public setWritingTimeout(float $seconds): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** | 0 for no timeout |




***

### setChunkSize

Set chunk size. Only has effect during connection in the writing cycle.

```php
public setChunkSize(float $bytes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytes` | **float** |  |




***

### getConnectionString

Get current connection string

```php
public getConnectionString(): string
```











***

### isPersistent

Get persistent setting

```php
public isPersistent(): bool
```











***

### getConnectionTimeout

Get current connection timeout setting

```php
public getConnectionTimeout(): float
```











***

### getTimeout

Get current in-transfer timeout

```php
public getTimeout(): float
```











***

### getWritingTimeout

Get current local writing timeout

```php
public getWritingTimeout(): float
```











***

### getChunkSize

Get current chunk size

```php
public getChunkSize(): float
```











***

### isConnected

Check to see if the socket is currently available.

```php
public isConnected(): bool
```

UDP might appear to be connected but might fail when writing.  See http://php.net/fsockopen for details.









***

### pfsockopen

Wrapper to allow mocking

```php
protected pfsockopen(): mixed
```











***

### fsockopen

Wrapper to allow mocking

```php
protected fsockopen(): mixed
```











***

### streamSetTimeout

Wrapper to allow mocking

```php
protected streamSetTimeout(): mixed
```










**See Also:**

* http://php.net/manual/en/function.stream-set-timeout.php - 

***

### streamSetChunkSize

Wrapper to allow mocking

```php
protected streamSetChunkSize(): mixed
```










**See Also:**

* http://php.net/manual/en/function.stream-set-chunk-size.php - 

***

### fwrite

Wrapper to allow mocking

```php
protected fwrite(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### streamGetMetadata

Wrapper to allow mocking

```php
protected streamGetMetadata(): mixed
```











***

### validateTimeout



```php
private validateTimeout(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### connectIfNotConnected



```php
private connectIfNotConnected(): mixed
```











***

### generateDataStream



```php
protected generateDataStream(mixed $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **mixed** |  |




***

### getResource



```php
protected getResource(): resource|null
```











***

### connect



```php
private connect(): mixed
```











***

### createSocketResource



```php
private createSocketResource(): mixed
```











***

### setSocketTimeout



```php
private setSocketTimeout(): mixed
```











***

### setStreamChunkSize



```php
private setStreamChunkSize(): mixed
```











***

### writeToSocket



```php
private writeToSocket(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### writingIsTimedOut



```php
private writingIsTimedOut(mixed $sent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sent` | **mixed** |  |




***

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
| `$bubble` | **bool** | true means that this handler allows bubbling.<br />false means that bubbling is not permitted. |




***

### getBubble

Gets the bubbling behavior.

```php
public getBubble(): bool
```









**Return Value:**

true means that this handler allows bubbling.
false means that bubbling is not permitted.



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











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
