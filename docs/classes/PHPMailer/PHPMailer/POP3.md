***

# POP3

PHPMailer POP-Before-SMTP Authentication Class.

Specifically for PHPMailer to use for RFC1939 POP-before-SMTP authentication.
1) This class does not support APOP authentication.
2) Opening and closing lots of POP3 connections can be quite slow. If you need
  to send a batch of emails then just perform the authentication once at the start,
  and then loop through your mail sending script. Providing this process doesn't
  take longer than the verification period lasts on your POP3 server, you should be fine.
3) This is really ancient technology; you should only need to use it to talk to very old systems.
4) This POP3 class is deliberately lightweight and incomplete, implementing just
  enough to do authentication.
  If you want a more complete class there are other POP3 classes for PHP available.

* Full name: `\PHPMailer\PHPMailer\POP3`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public|string|&#039;6.5.1&#039;|
|`DEFAULT_PORT`|public|int|110|
|`DEFAULT_TIMEOUT`|public|int|30|
|`LE`|public| |&quot;\r\n&quot;|
|`DEBUG_OFF`|public|int|0|
|`DEBUG_SERVER`|public|int|1|
|`DEBUG_CLIENT`|public|int|2|

## Properties


### do_debug

POP3 class debug output mode.

```php
public int $do_debug
```

Debug output level.
Options:



**See Also:**

*  - POP3::DEBUG_OFF: No output*  - POP3::DEBUG_SERVER: Server messages, connection/server errors*  - POP3::DEBUG_CLIENT: Client and Server messages, connection/server errors

***

### host

POP3 mail server hostname.

```php
public string $host
```






***

### port

POP3 port number.

```php
public int $port
```






***

### tval

POP3 Timeout Value in seconds.

```php
public int $tval
```






***

### username

POP3 username.

```php
public string $username
```






***

### password

POP3 password.

```php
public string $password
```






***

### pop_conn

Resource handle for the POP3 connection socket.

```php
protected resource $pop_conn
```






***

### connected

Are we connected?

```php
protected bool $connected
```






***

### errors

Error container.

```php
protected array $errors
```






***

## Methods


### popBeforeSmtp

Simple static wrapper for all-in-one POP before SMTP.

```php
public static popBeforeSmtp(string $host, int|bool $port = false, int|bool $timeout = false, string $username = &#039;&#039;, string $password = &#039;&#039;, int $debug_level): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | The hostname to connect to |
| `$port` | **int&#124;bool** | The port number to connect to |
| `$timeout` | **int&#124;bool** | The timeout value |
| `$username` | **string** |  |
| `$password` | **string** |  |
| `$debug_level` | **int** |  |




***

### authorise

Authenticate with a POP3 server.

```php
public authorise(string $host, int|bool $port = false, int|bool $timeout = false, string $username = &#039;&#039;, string $password = &#039;&#039;, int $debug_level): bool
```

A connect, login, disconnect sequence
appropriate for POP-before SMTP authorisation.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | The hostname to connect to |
| `$port` | **int&#124;bool** | The port number to connect to |
| `$timeout` | **int&#124;bool** | The timeout value |
| `$username` | **string** |  |
| `$password` | **string** |  |
| `$debug_level` | **int** |  |




***

### connect

Connect to a POP3 server.

```php
public connect(string $host, int|bool $port = false, int $tval = 30): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** |  |
| `$port` | **int&#124;bool** |  |
| `$tval` | **int** |  |




***

### login

Log in to the POP3 server.

```php
public login(string $username = &#039;&#039;, string $password = &#039;&#039;): bool
```

Does not support APOP (RFC 2828, 4949).






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$username` | **string** |  |
| `$password` | **string** |  |




***

### disconnect

Disconnect from the POP3 server.

```php
public disconnect(): mixed
```











***

### getResponse

Get a response from the POP3 server.

```php
protected getResponse(int $size = 128): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** | The maximum number of bytes to retrieve |




***

### sendString

Send raw data to the POP3 server.

```php
protected sendString(string $string): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### checkResponse

Checks the POP3 server response.

```php
protected checkResponse(string $string): bool
```

Looks for for +OK or -ERR.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### setError

Add an error to the internal error store.

```php
protected setError(string $error): mixed
```

Also display debug output if it's enabled.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **string** |  |




***

### getErrors

Get an array of error messages, if any.

```php
public getErrors(): array
```











***

### catchWarning

POP3 connection error handler.

```php
protected catchWarning(int $errno, string $errstr, string $errfile, int $errline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **int** |  |
| `$errstr` | **string** |  |
| `$errfile` | **string** |  |
| `$errline` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
