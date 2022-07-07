***

# redisClusterSessionHandler

Class redisSessionHandler



* Full name: `\yxorP\protocols\Http\Session\redisClusterSessionHandler`
* Parent class: [`\yxorP\protocols\Http\Session\redisSessionHandler`](./redisSessionHandler.md)




## Methods


### __construct

redisSessionHandler constructor.

```php
public __construct(mixed $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** | = [<br /> &#039;host&#039;     =&gt; &#039;127.0.0.1&#039;,<br /> &#039;port&#039;     =&gt; 6379,<br /> &#039;timeout&#039;  =&gt; 2,<br /> &#039;auth&#039;     =&gt; &#039;******&#039;,<br /> &#039;database&#039; =&gt; 2,<br /> &#039;prefix&#039;   =&gt; &#039;redis_session_&#039;,<br /> &#039;ping&#039;     =&gt; 55,<br />] |




***

### read

Read session data

```php
public read(mixed $session_id): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** | The session id to read data for. |


**Return Value:**

<p>
Returns an encoded string of the read data.
If nothing was read, it must return an empty string.
Note this value is returned internally to PHP for processing.
</p>



***


## Inherited methods


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
public open(mixed $save_path, mixed $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$save_path` | **mixed** | The path where to store/retrieve the session. |
| `$name` | **mixed** | The session name. |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### read

Read session data

```php
public read(mixed $session_id): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** | The session id to read data for. |


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
public write(mixed $session_id, mixed $session_data): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** | The session id. |
| `$session_data` | **mixed** | &lt;p&gt;<br />The encoded session data. This data is the<br />result of the PHP internally encoding<br />the $_SESSION superglobal to a serialized<br />string and passing it as this parameter.<br />Please note sessions use an alternative serialization method.<br />&lt;/p&gt; |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***

### updateTimestamp

Update sesstion modify time.

```php
public updateTimestamp(mixed $id, mixed $data = &quot;&quot;): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | session id. |
| `$data` | **mixed** | session Data. |




***

### destroy

Destroy a session

```php
public destroy(mixed $session_id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** | The session ID being destroyed. |


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
public gc(mixed $maxlifetime): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxlifetime` | **mixed** | &lt;p&gt;<br />Sessions that have not updated for<br />the last maxlifetime seconds will be removed.<br />&lt;/p&gt; |


**Return Value:**

<p>
The return value (usually TRUE on success, FALSE on failure).
Note this value is returned internally to PHP for processing.
</p>



***


***

