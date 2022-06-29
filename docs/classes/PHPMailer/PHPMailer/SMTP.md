***

# SMTP

PHPMailer RFC821 SMTP email transport class.

Implements RFC 821 SMTP commands and provides some utility methods for sending mail to an SMTP server.

* Full name: `\PHPMailer\PHPMailer\SMTP`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public|string|&#039;6.5.1&#039;|
|`LE`|public|string|&quot;\r\n&quot;|
|`DEFAULT_PORT`|public|int|25|
|`MAX_LINE_LENGTH`|public|int|998|
|`MAX_REPLY_LENGTH`|public|int|512|
|`DEBUG_OFF`|public|int|0|
|`DEBUG_CLIENT`|public|int|1|
|`DEBUG_SERVER`|public|int|2|
|`DEBUG_CONNECTION`|public|int|3|
|`DEBUG_LOWLEVEL`|public|int|4|

## Properties

### do_debug

Debug output level.

```php
public int $do_debug
```

Options:

* self::DEBUG_OFF (`0`) No debug output, default
* self::DEBUG_CLIENT (`1`) Client commands
* self::DEBUG_SERVER (`2`) Client commands and server responses
* self::DEBUG_CONNECTION (`3`) As DEBUG_SERVER plus connection status
* self::DEBUG_LOWLEVEL (`4`) Low-level data output, all messages.

***

### Debugoutput

How to handle debug output.

```php
public string|callable|\Psr\Log\LoggerInterface $Debugoutput
```

Options:

* `echo` Output plain-text as-is, appropriate for CLI
* `html` Output escaped, line breaks converted to `<br>`, appropriate for browser output
* `error_log` Output to error log as configured in php.ini Alternatively, you can provide a callable expecting two
  params: a message string and the debug level:

```php
$smtp->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
```

Alternatively, you can pass in an instance of a PSR-3 compatible logger, though only `debug`
level output is used:

```php
$mail->Debugoutput = new myPsr3Logger;
```

***

### do_verp

Whether to use VERP.

```php
public bool $do_verp
```

**See Also:**

* http://en.wikipedia.org/wiki/Variable_envelope_return_path - * http://www.postfix.org/VERP_README.html - Info on VERP

***

### Timeout

The timeout value for connection, in seconds.

```php
public int $Timeout
```

Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2. This needs to be quite high to function correctly with
hosts using greetdelay as an anti-spam measure.

**See Also:**

* http://tools.ietf.org/html/rfc2821#section-4.5.3.2 -

***

### Timelimit

How long to wait for commands to complete, in seconds.

```php
public int $Timelimit
```

Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2.




***

### smtp_transaction_id_patterns

Patterns to extract an SMTP transaction id from reply to a DATA command.

```php
protected string[] $smtp_transaction_id_patterns
```

The first capture group in each regex will be used as the ID. MS ESMTP returns the message ID, which may not be correct
for internal tracking.




***

### last_smtp_transaction_id

The last transaction ID issued in response to a DATA command, if one was detected.

```php
protected string|bool|null $last_smtp_transaction_id
```

***

### smtp_conn

The socket for the server connection.

```php
protected ?resource $smtp_conn
```

***

### error

Error information, if any, for the last SMTP command.

```php
protected array $error
```

***

### helo_rply

The reply the server sent to us for HELO.

```php
protected string|null $helo_rply
```

If null, no HELO string has yet been received.




***

### server_caps

The set of SMTP extensions sent in reply to EHLO command.

```php
protected array|null $server_caps
```

Indexes of the array are extension names. Value at index 'HELO' or 'EHLO' (according to command that was sent)
represents the server name. In case of HELO it is the only element of the array. Other values can be boolean TRUE or an
array containing extension options. If null, no HELO/EHLO string has yet been received.




***

### last_reply

The most recent reply received from the server.

```php
protected string $last_reply
```

***

## Methods

### edebug

Output debugging info via a user-selected method.

```php
protected edebug(string $str, int $level): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | Debug string to output |
| `$level` | **int** | The debug level of this message; see DEBUG_* constants |

**See Also:**

* \PHPMailer\PHPMailer\SMTP::$Debugoutput - * \PHPMailer\PHPMailer\SMTP::$do_debug -

***

### connect

Connect to an SMTP server.

```php
public connect(string $host, int $port = null, int $timeout = 30, array $options = []): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | SMTP server IP or host name |
| `$port` | **int** | The port number to connect to |
| `$timeout` | **int** | How long to wait for the connection to open |
| `$options` | **array** | An array of options for stream_context_create() |

***

### getSMTPConnection

Create connection to the SMTP server.

```php
protected getSMTPConnection(string $host, int $port = null, int $timeout = 30, array $options = []): false|resource
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | SMTP server IP or host name |
| `$port` | **int** | The port number to connect to |
| `$timeout` | **int** | How long to wait for the connection to open |
| `$options` | **array** | An array of options for stream_context_create() |

***

### startTLS

Initiate a TLS (encrypted) session.

```php
public startTLS(): bool
```

***

### authenticate

Perform SMTP authentication.

```php
public authenticate(string $username, string $password, string $authtype = null, \PHPMailer\PHPMailer\OAuth $OAuth = null): bool
```

Must be run after hello().

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$username` | **string** | The user name |
| `$password` | **string** | The password |
| `$authtype` | **string** | The auth type (CRAM-MD5, PLAIN, LOGIN, XOAUTH2) |
| `$OAuth` | **\PHPMailer\PHPMailer\OAuth** | An optional OAuth instance for XOAUTH2 authentication |

**Return Value:**

True if successfully authenticated

**See Also:**

* \PHPMailer\PHPMailer\hello() -

***

### hmac

Calculate an MD5 HMAC hash.

```php
protected hmac(string $data, string $key): string
```

Works like hash_hmac('md5', $data, $key)
in case that function is not available.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** | The data to hash |
| `$key` | **string** | The key to hash with |

***

### connected

Check connection state.

```php
public connected(): bool
```

**Return Value:**

True if connected



***

### close

Close the socket and clean up the state of the class.

```php
public close(): mixed
```

Don't use this function without first trying to use QUIT.

**See Also:**

* \PHPMailer\PHPMailer\quit() -

***

### data

Send an SMTP DATA command.

```php
public data(string $msg_data): bool
```

Issues a data command and sends the msg_data to the server, finializing the mail transaction. $msg_data is the message
that is to be send with the headers. Each header needs to be on a single line followed by a <CRLF> with the message
headers and the message body being separated by an additional <CRLF>. Implements RFC 821: DATA <CRLF>.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg_data` | **string** | Message data to send |

***

### hello

Send an SMTP HELO or EHLO command.

```php
public hello(string $host = &#039;&#039;): bool
```

Used to identify the sending server to the receiving server. This makes sure that client and server are in a known
state. Implements RFC 821: HELO <SP> <domain> <CRLF>
and RFC 2821 EHLO.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | The host name or IP to connect to |

***

### sendHello

Send an SMTP HELO or EHLO command.

```php
protected sendHello(string $hello, string $host): bool
```

Low-level implementation used by hello().

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hello` | **string** | The HELO string |
| `$host` | **string** | The hostname to say we are |

**See Also:**

* \PHPMailer\PHPMailer\hello() -

***

### parseHelloFields

Parse a reply to HELO/EHLO command to discover server extensions.

```php
protected parseHelloFields(string $type): mixed
```

In case of HELO, the only parameter that can be discovered is a server name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | `HELO` or `EHLO` |

***

### mail

Send an SMTP MAIL command.

```php
public mail(string $from): bool
```

Starts a mail transaction from the email address specified in $from. Returns true if successful or false otherwise. If
True the mail transaction is started and then one or more recipient commands may be called followed by a data command.
Implements RFC 821: MAIL <SP> FROM:<reverse-path> <CRLF>.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** | Source address of this message |

***

### quit

Send an SMTP QUIT command.

```php
public quit(bool $close_on_error = true): bool
```

Closes the socket if there is no error or the $close_on_error argument is true. Implements from RFC 821: QUIT <CRLF>.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$close_on_error` | **bool** | Should the connection close if an error occurs? |

***

### recipient

Send an SMTP RCPT command.

```php
public recipient(string $address, string $dsn = &#039;&#039;): bool
```

Sets the TO argument to $toaddr. Returns true if the recipient was accepted false if it was rejected. Implements from
RFC 821: RCPT <SP> TO:<forward-path> <CRLF>.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The address the message is being sent to |
| `$dsn` | **
string** | Comma separated list of DSN notifications. NEVER, SUCCESS, FAILURE<br />or DELAY. If you specify NEVER all other notifications are ignored. |

***

### reset

Send an SMTP RSET command.

```php
public reset(): bool
```

Abort any transaction that is currently in progress. Implements RFC 821: RSET <CRLF>.

**Return Value:**

True on success



***

### sendCommand

Send a command to an SMTP server and check its return code.

```php
protected sendCommand(string $command, string $commandstring, int|array $expect): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **string** | The command name - not sent to the server |
| `$commandstring` | **string** | The actual command to send |
| `$expect` | **int&#124;array** | One or more expected integer success codes |

**Return Value:**

True on success



***

### sendAndMail

Send an SMTP SAML command.

```php
public sendAndMail(string $from): bool
```

Starts a mail transaction from the email address specified in $from. Returns true if successful or false otherwise. If
True the mail transaction is started and then one or more recipient commands may be called followed by a data command.
This command will send the message to the users terminal if they are logged in and send them an email. Implements RFC
821: SAML <SP> FROM:<reverse-path> <CRLF>.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** | The address the message is from |

***

### verify

Send an SMTP VRFY command.

```php
public verify(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to verify |

***

### noop

Send an SMTP NOOP command.

```php
public noop(): bool
```

Used to keep keep-alives alive, doesn't actually do anything.









***

### turn

Send an SMTP TURN command.

```php
public turn(): bool
```

This is an optional command for SMTP that this class does not support. This method is here to make the RFC821 Definition
complete for this class and _may_ be implemented in future. Implements from RFC 821: TURN <CRLF>.









***

### client_send

Send raw data to the server.

```php
public client_send(string $data, string $command = &#039;&#039;): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** | The data to send |
| `$command` | **string** | Optionally, the command this is part of, used only for controlling debug output |

**Return Value:**

The number of bytes sent to the server or false on error



***

### getError

Get the latest error.

```php
public getError(): array
```

***

### getServerExtList

Get SMTP extensions available on the server.

```php
public getServerExtList(): array|null
```

***

### getServerExt

Get metadata about the SMTP server from its HELO/EHLO response.

```php
public getServerExt(string $name): string|bool|null
```

The method works in three ways, dependent on argument value and current state:

1. HELO/EHLO has not been sent - returns null and populates $this->error.
2. HELO has been sent - $name == 'HELO': returns server name $name == 'EHLO': returns boolean false $name == any other
   string: returns null and populates $this->error
3. EHLO has been sent - $name == 'HELO'|'EHLO': returns the server name $name == any other string: if extension $name
   exists, returns True or its options (e.g. AUTH mechanisms supported). Otherwise returns False.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of SMTP extension or &#039;HELO&#039;&amp;#124;&#039;EHLO&#039; |

***

### getLastReply

Get the last reply from the server.

```php
public getLastReply(): string
```

***

### get_lines

Read the SMTP server's response.

```php
protected get_lines(): string
```

Either before eof or socket timeout occurs on the operation. With SMTP we can tell if we have more lines to read if the
4th character is '-' symbol. If it is a space then we don't need to read anything else.









***

### setVerp

Enable or disable VERP address generation.

```php
public setVerp(bool $enabled = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enabled` | **bool** |  |

***

### getVerp

Get VERP address generation mode.

```php
public getVerp(): bool
```

***

### setError

Set error messages and codes.

```php
protected setError(string $message, string $detail = &#039;&#039;, string $smtp_code = &#039;&#039;, string $smtp_code_ex = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The error message |
| `$detail` | **string** | Further detail on the error |
| `$smtp_code` | **string** | An associated SMTP error code |
| `$smtp_code_ex` | **string** | Extended SMTP code |

***

### setDebugOutput

Set debug output method.

```php
public setDebugOutput(string|callable $method = &#039;echo&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **
string&#124;callable** | The name of the mechanism to use for debugging output, or a callable to handle it |

***

### getDebugOutput

Get debug output method.

```php
public getDebugOutput(): string
```

***

### setDebugLevel

Set debug output level.

```php
public setDebugLevel(int $level): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |

***

### getDebugLevel

Get debug output level.

```php
public getDebugLevel(): int
```

***

### setTimeout

Set SMTP timeout.

```php
public setTimeout(int $timeout): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int** | The timeout duration in seconds |

***

### getTimeout

Get SMTP timeout.

```php
public getTimeout(): int
```

***

### errorHandler

Reports an error number and string.

```php
protected errorHandler(int $errno, string $errmsg, string $errfile = &#039;&#039;, int $errline): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **int** | The error number returned by PHP |
| `$errmsg` | **string** | The error message returned by PHP |
| `$errfile` | **string** | The file the error occurred in |
| `$errline` | **int** | The line number the error occurred on |

***

### recordLastTransactionID

Extract and return the ID of the last SMTP transaction based on a list of patterns provided in SMTP::
$smtp_transaction_id_patterns.

```php
protected recordLastTransactionID(): bool|string|null
```

Relies on the host providing the ID in response to a DATA command. If no reply has been received yet, it will return
null. If no pattern was matched, it will return false.









***

### getLastTransactionID

Get the queue/transaction ID of the last SMTP transaction If no reply has been received yet, it will return null.

```php
public getLastTransactionID(): bool|string|null
```

If no pattern was matched, it will return false.

**See Also:**

* \PHPMailer\PHPMailer\recordLastTransactionID() -

***


***

