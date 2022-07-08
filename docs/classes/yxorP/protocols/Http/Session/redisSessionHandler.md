***

# redisSessionHandler





* Full name: `\yxorP\protocols\Http\Session\redisSessionHandler`
* This class implements:
[`\yxorP\protocols\Http\Session\sessionHandlerInterface`](./sessionHandlerInterface.md)



## Properties


### _redis



```php
protected \Redis $_redis
```






***

### _config



```php
protected array $_config
```






***

## Methods


### __construct

redisSessionHandler constructor.

```php
public __construct(array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** | = [<br /> &#039;host&#039;     =&gt; &#039;127.0.0.1&#039;,<br /> &#039;port&#039;     =&gt; 6379,<br /> &#039;timeout&#039;  =&gt; 2,<br /> &#039;auth&#039;     =&gt; &#039;******&#039;,<br /> &#039;database&#039; =&gt; 2,<br /> &#039;prefix&#039;   =&gt; &#039;redis_session_&#039;,<br /> &#039;ping&#039;     =&gt; 55,<br />] |




***

### connect



```php
public connect(): mixed
```











***

### open

Initialize session

```php
public open(string $save_path, string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$save_path` | **string** | The path where to store/retrieve the session. |
| `$name` | **string** | The session name. |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### read

Read session data

```php
public read(string $session_id): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **string** | The session id to read data for. |


**Return Value:**

<p>
Returns an encoded string of the read data.
If nothing was read, it must return an empty string.
Note this value is returned internally to PHP for processing.
</p>



***

### write

Write session data

```php
public write(string $session_id, string $session_data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **string** | The session id. |
| `$session_data` | **string** | &lt;p&gt;<br />The encoded session data. This data is the<br />result of the PHP internally encoding<br />the $_SESSION superglobal to a serialized<br />string and passing it as this parameter.<br />Please note sessions use an alternative serialization method.<br />&lt;/p&gt; |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### updateTimestamp

Update sesstion modify time.

```php
public updateTimestamp(string $id, string $data = &quot;&quot;): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | session id. |
| `$data` | **string** | session Data. |




***

### destroy

Destroy a session

```php
public destroy(string $session_id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **string** | The session ID being destroyed. |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### close

Close the session

```php
public close(): bool
```









**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### gc

Cleanup old sessions

```php
public gc(int $maxlifetime): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxlifetime` | **int** | &lt;p&gt;<br />Sessions that have not updated for<br />the last maxlifetime seconds will be removed.<br />&lt;/p&gt; |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
