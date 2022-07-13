***

# PHPMailer

PHPMailer - PHP email creation and transport class.

* Full name: `\PHPMailer\PHPMailer\PHPMailer`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CHARSET_ASCII`|public| |&#039;us-ascii&#039;|
|`CHARSET_ISO88591`|public| |&#039;iso-8859-1&#039;|
|`CHARSET_UTF8`|public| |&#039;utf-8&#039;|
|`CONTENT_TYPE_PLAINTEXT`|public| |&#039;text/plain&#039;|
|`CONTENT_TYPE_TEXT_CALENDAR`|public| |&#039;text/calendar&#039;|
|`CONTENT_TYPE_TEXT_HTML`|public| |&#039;text/html&#039;|
|`CONTENT_TYPE_MULTIPART_ALTERNATIVE`|public| |&#039;multipart/alternative&#039;|
|`CONTENT_TYPE_MULTIPART_MIXED`|public| |&#039;multipart/mixed&#039;|
|`CONTENT_TYPE_MULTIPART_RELATED`|public| |&#039;multipart/related&#039;|
|`ENCODING_7BIT`|public| |&#039;7bit&#039;|
|`ENCODING_8BIT`|public| |&#039;8bit&#039;|
|`ENCODING_BASE64`|public| |&#039;base64&#039;|
|`ENCODING_BINARY`|public| |&#039;binary&#039;|
|`ENCODING_QUOTED_PRINTABLE`|public| |&#039;quoted-printable&#039;|
|`ENCRYPTION_STARTTLS`|public| |&#039;tls&#039;|
|`ENCRYPTION_SMTPS`|public| |&#039;ssl&#039;|
|`ICAL_METHOD_REQUEST`|public| |&#039;REQUEST&#039;|
|`ICAL_METHOD_PUBLISH`|public| |&#039;PUBLISH&#039;|
|`ICAL_METHOD_REPLY`|public| |&#039;REPLY&#039;|
|`ICAL_METHOD_ADD`|public| |&#039;ADD&#039;|
|`ICAL_METHOD_CANCEL`|public| |&#039;CANCEL&#039;|
|`ICAL_METHOD_REFRESH`|public| |&#039;REFRESH&#039;|
|`ICAL_METHOD_COUNTER`|public| |&#039;COUNTER&#039;|
|`ICAL_METHOD_DECLINECOUNTER`|public| |&#039;DECLINECOUNTER&#039;|
|`VERSION`|public|string|&#039;6.6.3&#039;|
|`STOP_MESSAGE`|public|int|0|
|`STOP_CONTINUE`|public|int|1|
|`STOP_CRITICAL`|public|int|2|
|`CRLF`|public| |&quot;\r\n&quot;|
|`FWS`|public| |&#039; &#039;|
|`MAIL_MAX_LINE_LENGTH`|public|int|63|
|`MAX_LINE_LENGTH`|public|int|998|
|`STD_LINE_LENGTH`|public|int|76|

## Properties

### Priority

Email priority.

```php
public int|null $Priority
```

Options: null (default), 1 = High, 3 = Normal, 5 = low. When null, the header is not set at all.




***

### CharSet

The character set of the message.

```php
public string $CharSet
```

***

### ContentType

The MIME Content-type of the message.

```php
public string $ContentType
```

***

### Encoding

The message encoding.

```php
public string $Encoding
```

Options: "8bit", "7bit", "binary", "base64", and "quoted-printable".




***

### ErrorInfo

Holds the most recent mailer error message.

```php
public string $ErrorInfo
```

***

### From

The From email address for the message.

```php
public string $From
```

***

### FromName

The From name of the message.

```php
public string $FromName
```

***

### Sender

The envelope sender of the message.

```php
public string $Sender
```

This will usually be turned into a Return-Path header by the receiver, and is the address that bounces will be sent to.
If not empty, will be passed via `-f` to sendmail or as the 'MAIL FROM' value over SMTP.




***

### Subject

The Subject of the message.

```php
public string $Subject
```

***

### Body

An HTML or plain text message body.

```php
public string $Body
```

If HTML then call isHTML(true).




***

### AltBody

The plain-text message body.

```php
public string $AltBody
```

This body can be read by mail clients that do not have HTML email capability such as mutt & Eudora. Clients that can
read HTML will view the normal Body.




***

### Ical

An iCal message part body.

```php
public string $Ical
```

Only supported in simple alt or alt_inline message types To generate iCal event structures, use classes like
EasyPeasyICS or iCalcreator.

**See Also:**

* http://sprain.ch/blog/downloads/php-class-easypeasyics-create-ical-files-with-php/ -
  * http://kigkonsult.se/iCalcreator/ -

***

### IcalMethods

Value-array of "method" in Contenttype header "text/calendar"

```php
protected static string[] $IcalMethods
```

* This property is **static**.

***

### MIMEBody

The complete compiled MIME message body.

```php
protected string $MIMEBody
```

***

### MIMEHeader

The complete compiled MIME message headers.

```php
protected string $MIMEHeader
```

***

### mailHeader

Extra headers that createHeader() doesn't fold in.

```php
protected string $mailHeader
```

***

### WordWrap

Word-wrap the message body to this number of chars.

```php
public int $WordWrap
```

Set to 0 to not wrap. A useful value here is 78, for RFC2822 section 2.1.1 compliance.

**See Also:**

* \PHPMailer\PHPMailer\static::STD_LINE_LENGTH -

***

### Mailer

Which method to use to send mail.

```php
public string $Mailer
```

Options: "mail", "sendmail", or "smtp".




***

### Sendmail

The path to the sendmail program.

```php
public string $Sendmail
```

***

### UseSendmailOptions

Whether mail() uses a fully sendmail-compatible MTA.

```php
public bool $UseSendmailOptions
```

One which supports sendmail's "-oi -f" options.




***

### ConfirmReadingTo

The email address that a reading confirmation should be sent to, also known as read receipt.

```php
public string $ConfirmReadingTo
```

***

### Hostname

The hostname to use in the Message-ID header and as default HELO string.

```php
public string $Hostname
```

If empty, PHPMailer attempts to find one with, in order, $_SERVER['SERVER_NAME'], gethostname(), php_uname('n'), or the
value
'localhost.localdomain'.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$Helo -

***

### MessageID

An ID to be used in the Message-ID header.

```php
public string $MessageID
```

If empty, a unique id will be generated. You can set your own, but it must be in the format "<id@domain>", as defined in
RFC5322 section 3.6.4 or it will be ignored.

**See Also:**

* https://tools.ietf.org/html/rfc5322#section-3.6.4 -

***

### MessageDate

The message Date to be used in the Date header.

```php
public string $MessageDate
```

If empty, the current date will be added.




***

### Host

SMTP hosts.

```php
public string $Host
```

Either a single hostname or multiple semicolon-delimited hostnames. You can also specify a different port for each host
by using this format: [hostname:port]
(e.g. "smtp1.example.com:25;smtp2.example.com"). You can also specify encryption type, for example:
(e.g. "tls://smtp1.example.com:587;ssl://smtp2.example.com:465"). Hosts will be tried in order.




***

### Port

The default SMTP server port.

```php
public int $Port
```

***

### Helo

The SMTP HELO/EHLO name used for the SMTP connection.

```php
public string $Helo
```

Default is $Hostname. If $Hostname is empty, PHPMailer attempts to find one with the same method described above for
$Hostname.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$Hostname -

***

### SMTPSecure

What kind of encryption to use on the SMTP connection.

```php
public string $SMTPSecure
```

Options: '', static::ENCRYPTION_STARTTLS, or static::ENCRYPTION_SMTPS.




***

### SMTPAutoTLS

Whether to enable TLS encryption automatically if a server supports it, even if `SMTPSecure` is not set to 'tls'.

```php
public bool $SMTPAutoTLS
```

Be aware that in PHP >= 5.6 this requires that the server's certificates are valid.




***

### SMTPAuth

Whether to use SMTP authentication.

```php
public bool $SMTPAuth
```

Uses the Username and Password properties.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$Username - * \PHPMailer\PHPMailer\PHPMailer::$Password -

***

### SMTPOptions

Options array passed to stream_context_create when connecting via SMTP.

```php
public array $SMTPOptions
```

***

### Username

SMTP username.

```php
public string $Username
```

***

### Password

SMTP password.

```php
public string $Password
```

***

### AuthType

SMTP auth type.

```php
public string $AuthType
```

Options are CRAM-MD5, LOGIN, PLAIN, XOAUTH2, attempted in that order if not specified.




***

### oauth

An implementation of the PHPMailer OAuthTokenProvider interface.

```php
protected \PHPMailer\PHPMailer\OAuthTokenProvider $oauth
```

***

### Timeout

The SMTP server timeout in seconds.

```php
public int $Timeout
```

Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2.




***

### dsn

Comma separated list of DSN notifications
'NEVER' under no circumstances a DSN must be returned to the sender.

```php
public $dsn
```

If you use NEVER all other notifications will be ignored.
'SUCCESS' will notify you when your mail has arrived at its destination.
'FAILURE' will arrive if an error occurred during delivery.
'DELAY' will notify you if there is an unusual delay in delivery, but the actual delivery's outcome (success or failure)
is not yet decided.

**See Also:**

* https://tools.ietf.org/html/rfc3461 - See section 4.1 for more information about NOTIFY

***

### SMTPDebug

SMTP class debug output mode.

```php
public int $SMTPDebug
```

Debug output level. Options:

**See Also:**

*
    - SMTP::DEBUG_OFF: No output*  - SMTP::DEBUG_CLIENT: Client messages*  - SMTP::DEBUG_SERVER: Client and server
      messages*  - SMTP::DEBUG_CONNECTION: As SERVER plus connection status*  - SMTP::DEBUG_LOWLEVEL: Noisy, low-level
      data output, rarely needed* \PHPMailer\PHPMailer\SMTP::$do_debug -

***

### Debugoutput

How to handle debug output.

```php
public string|callable|\Psr\Log\LoggerInterface $Debugoutput
```

Options:

* `echo` Output plain-text as-is, appropriate for CLI
* `html` Output escaped, line breaks converted to `<br>`, appropriate for browser output
* `error_log` Output to error log as configured in php.ini By default PHPMailer will use `echo` if run from a `cli`
  or `cli-server` SAPI, `html` otherwise. Alternatively, you can provide a callable expecting two params: a message
  string and the debug level:

```php
$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
```

Alternatively, you can pass in an instance of a PSR-3 compatible logger, though only `debug`
level output is used:

```php
$mail->Debugoutput = new myPsr3Logger;
```

**See Also:**

* \PHPMailer\PHPMailer\SMTP::$Debugoutput -

***

### SMTPKeepAlive

Whether to keep the SMTP connection open after each message.

```php
public bool $SMTPKeepAlive
```

If this is set to true then the connection will remain open after a send, and closing the connection will require an
explicit call to smtpClose(). It's a good idea to use this if you are sending multiple messages as it reduces overhead.
See the mailing list example for how to use it.




***

### SingleTo

Whether to split multiple to addresses into multiple messages or send them all in one message.

```php
public bool $SingleTo
```

Only supported in `mail` and `sendmail` transports, not in SMTP.

* **Warning:** this property is **deprecated**. This means that this property will likely be removed in a future
  version.

***

### SingleToArray

Storage for addresses when SingleTo is enabled.

```php
protected array $SingleToArray
```

***

### do_verp

Whether to generate VERP addresses on send.

```php
public bool $do_verp
```

Only applicable when sending via SMTP.

**See Also:**

* https://en.wikipedia.org/wiki/Variable_envelope_return_path - * http://www.postfix.org/VERP_README.html - Postfix VERP
  info

***

### AllowEmpty

Whether to allow sending messages with an empty body.

```php
public bool $AllowEmpty
```

***

### DKIM_selector

DKIM selector.

```php
public string $DKIM_selector
```

***

### DKIM_identity

DKIM Identity.

```php
public string $DKIM_identity
```

Usually the email address used as the source of the email.




***

### DKIM_passphrase

DKIM passphrase.

```php
public string $DKIM_passphrase
```

Used if your key is encrypted.




***

### DKIM_domain

DKIM signing domain name.

```php
public string $DKIM_domain
```

***

### DKIM_copyHeaderFields

DKIM Copy header field values for diagnostic use.

```php
public bool $DKIM_copyHeaderFields
```

***

### DKIM_extraHeaders

DKIM Extra signing headers.

```php
public array $DKIM_extraHeaders
```

***

### DKIM_private

DKIM private key file path.

```php
public string $DKIM_private
```

***

### DKIM_private_string

DKIM private key string.

```php
public string $DKIM_private_string
```

If set, takes precedence over `$DKIM_private`.




***

### action_function

Callback Action function name.

```php
public string $action_function
```

The function that handles the result of the send email action. It is called out by send() for each email sent.

Value can be any php callable: http://www.php.net/is_callable

Parameters:
bool $result result of the send action array $to email addresses of the recipients array $cc cc email addresses array
$bcc bcc email addresses string $subject the subject string $body the email body string $from email address of sender
string $extra extra information of possible use
"smtp_transaction_id' => last smtp transaction id




***

### XMailer

What to put in the X-Mailer header.

```php
public string|null $XMailer
```

Options: An empty string for PHPMailer default, whitespace/null for none, or a string to use.




***

### validator

Which validator to use by default when validating email addresses.

```php
public static string|callable $validator
```

May be a callable to inject your own validator, but there are several built-in validators. The default validator uses
PHP's FILTER_VALIDATE_EMAIL filter_var option.

* This property is **static**.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::validateAddress() -

***

### smtp

An instance of the SMTP sender class.

```php
protected \PHPMailer\PHPMailer\SMTP $smtp
```

***

### to

The array of 'to' names and addresses.

```php
protected array $to
```

***

### cc

The array of 'cc' names and addresses.

```php
protected array $cc
```

***

### bcc

The array of 'bcc' names and addresses.

```php
protected array $bcc
```

***

### ReplyTo

The array of reply-to names and addresses.

```php
protected array $ReplyTo
```

***

### all_recipients

An array of all kinds of addresses.

```php
protected array $all_recipients
```

Includes all of $to, $cc, $bcc.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$to - * \PHPMailer\PHPMailer\PHPMailer::$cc - * \PHPMailer\PHPMailer\PHPMailer::$bcc -

***

### RecipientsQueue

An array of names and addresses queued for validation.

```php
protected array $RecipientsQueue
```

In send(), valid and non duplicate entries are moved to $all_recipients and one of $to, $cc, or $bcc. This array is used
only for addresses with IDN.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$to - * \PHPMailer\PHPMailer\PHPMailer::$cc - * \PHPMailer\PHPMailer\PHPMailer::$bcc -
  * \PHPMailer\PHPMailer\PHPMailer::$all_recipients -

***

### ReplyToQueue

An array of reply-to names and addresses queued for validation.

```php
protected array $ReplyToQueue
```

In send(), valid and non duplicate entries are moved to $ReplyTo. This array is used only for addresses with IDN.

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$ReplyTo -

***

### attachment

The array of attachments.

```php
protected array $attachment
```

***

### CustomHeader

The array of custom headers.

```php
protected array $CustomHeader
```

***

### lastMessageID

The most recent Message-ID (including angular brackets).

```php
protected string $lastMessageID
```

***

### message_type

The message's MIME type.

```php
protected string $message_type
```

***

### boundary

The array of MIME boundary strings.

```php
protected array $boundary
```

***

### language

The array of available text strings for the current language.

```php
protected array $language
```

***

### error_count

The number of errors encountered.

```php
protected int $error_count
```

***

### sign_cert_file

The S/MIME certificate file path.

```php
protected string $sign_cert_file
```

***

### sign_key_file

The S/MIME key file path.

```php
protected string $sign_key_file
```

***

### sign_extracerts_file

The optional S/MIME extra certificates ("CA Chain") file path.

```php
protected string $sign_extracerts_file
```

***

### sign_key_pass

The S/MIME password for the key.

```php
protected string $sign_key_pass
```

Used only if the key is encrypted.




***

### exceptions

Whether to throw exceptions for errors.

```php
protected bool $exceptions
```

***

### uniqueid

Unique ID used for message ID and boundaries.

```php
protected string $uniqueid
```

***

### LE

SMTP RFC standard line ending; Carriage Return, Line Feed.

```php
protected static string $LE
```

* This property is **static**.

***

## Methods

### __construct

Constructor.

```php
public __construct(bool $exceptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exceptions` | **bool** | Should we throw external exceptions? |

***

### __destruct

Destructor.

```php
public __destruct(): mixed
```

***

### mailPassthru

Call mail() in a safe_mode-aware fashion.

```php
private mailPassthru(string $to, string $subject, string $body, string $header, string|null $params): bool
```

Also, unless sendmail_path points to sendmail (or something that claims to be sendmail), don't pass params (not a
perfect fix, but it will do).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **string** | To |
| `$subject` | **string** | Subject |
| `$body` | **string** | Message Body |
| `$header` | **string** | Additional Header(s) |
| `$params` | **string&#124;null** | Params |

***

### edebug

Output debugging info via a user-defined method.

```php
protected edebug(string $str): mixed
```

Only generates output if debug output is enabled.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$Debugoutput - * \PHPMailer\PHPMailer\PHPMailer::$SMTPDebug -

***

### isHTML

Sets message type to HTML or plain.

```php
public isHTML(bool $isHtml = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isHtml` | **bool** | True for HTML mode |

***

### isSMTP

Send messages using SMTP.

```php
public isSMTP(): mixed
```

***

### isMail

Send messages using PHP's mail() function.

```php
public isMail(): mixed
```

***

### isSendmail

Send messages using $Sendmail.

```php
public isSendmail(): mixed
```

***

### isQmail

Send messages using qmail.

```php
public isQmail(): mixed
```

***

### addAddress

Add a "To" address.

```php
public addAddress(string $address, string $name = &#039;&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to send to |
| `$name` | **string** |  |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### addCC

Add a "CC" address.

```php
public addCC(string $address, string $name = &#039;&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to send to |
| `$name` | **string** |  |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### addBCC

Add a "BCC" address.

```php
public addBCC(string $address, string $name = &#039;&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to send to |
| `$name` | **string** |  |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### addReplyTo

Add a "Reply-To" address.

```php
public addReplyTo(string $address, string $name = &#039;&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to reply to |
| `$name` | **string** |  |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### addOrEnqueueAnAddress

Add an address to one of the recipient arrays or to the ReplyTo array. Because PHPMailer can't validate addresses with
an IDN without knowing the PHPMailer::$CharSet (that can still be modified after calling this function), addition of
such addresses is delayed until send().

```php
protected addOrEnqueueAnAddress(string $kind, string $address, string $name): bool
```

Addresses that have been added already return false, but do not throw exceptions.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** | One of &#039;to&#039;, &#039;cc&#039;, &#039;bcc&#039;, or &#039;ReplyTo&#039; |
| `$address` | **string** | The email address |
| `$name` | **string** | An optional username associated with the address |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### addAnAddress

Add an address to one of the recipient arrays or to the ReplyTo array.

```php
protected addAnAddress(string $kind, string $address, string $name = &#039;&#039;): bool
```

Addresses that have been added already return false, but do not throw exceptions.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** | One of &#039;to&#039;, &#039;cc&#039;, &#039;bcc&#039;, or &#039;ReplyTo&#039; |
| `$address` | **string** | The email address to send, resp. to reply to |
| `$name` | **string** |  |

**Return Value:**

true on success, false if address already used or invalid in some way



***

### parseAddresses

Parse and validate a string containing one or more RFC822-style comma-separated email addresses of the form "display
name <address>" into an array of name/address pairs.

```php
public static parseAddresses(string $addrstr, bool $useimap = true, string $charset = self::CHARSET_ISO88591): array
```

Uses the imap_rfc822_parse_adrlist function if the IMAP extension is available. Note that quotes in the name part are
removed.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addrstr` | **string** | The address list string |
| `$useimap` | **bool** | Whether to use the IMAP extension to parse the list |
| `$charset` | **string** | The charset to use when decoding the address list string. |

**See Also:**

* http://www.andrew.cmu.edu/user/agreen1/testing/mrbs/web/Mail/RFC822.php - A more careful implementation

***

### setFrom

Set the From and FromName properties.

```php
public setFrom(string $address, string $name = &#039;&#039;, bool $auto = true): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** |  |
| `$name` | **string** |  |
| `$auto` | **bool** | Whether to also set the Sender address, defaults to true |

***

### getLastMessageID

Return the Message-ID header of the last email.

```php
public getLastMessageID(): string
```

Technically this is the value from the last time the headers were created, but it's also the message ID of the last sent
message except in pathological cases.









***

### validateAddress

Check that a string looks like an email address.

```php
public static validateAddress(string $address, string|callable $patternselect = null): bool
```

Validation patterns supported:

* `auto` Pick best pattern automatically;
* `pcre8` Use the squiloople.com pattern, requires PCRE > 8.0;
* `pcre` Use old PCRE implementation;
* `php` Use PHP built-in FILTER_VALIDATE_EMAIL;
* `html5` Use the pattern given by the HTML5 spec for 'email' type form input elements.
* `noregex` Don't use a regex: super fast, really dumb. Alternatively you may pass in a callable to inject your own
  validator, for example:

```php
PHPMailer::validateAddress('user@example.com', function($address) {
    return (strpos($address, '@') !== false);
});
```

You can also set the PHPMailer::$validator static to a callable, allowing built-in methods to use your validator.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to check |
| `$patternselect` | **string&#124;callable** | Which pattern to use |

***

### idnSupported

Tells whether IDNs (Internationalized Domain Names) are supported or not. This requires the
`intl` and `mbstring` PHP extensions.

```php
public static idnSupported(): bool
```

* This method is **static**.

**Return Value:**

`true` if required functions for IDN support are present



***

### punyencodeAddress

Converts IDN in given email address to its ASCII form, also known as punycode, if possible.

```php
public punyencodeAddress(string $address): string
```

Important: Address must be passed in same encoding as currently set in PHPMailer::$CharSet. This function silently
returns unmodified address if:

- No conversion is necessary (i.e. domain name is not an IDN, or is already in ASCII form)
- Conversion to punycode is impossible (e.g. required PHP functions are not available)
  or fails for any reason (e.g. domain contains characters not allowed in an IDN).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** | The email address to convert |

**Return Value:**

The encoded address in ASCII form

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$CharSet -

***

### send

Create a message and send it.

```php
public send(): bool
```

Uses the sending method specified by $Mailer.

**Return Value:**

false on error - See the ErrorInfo property for details of the error



***

### preSend

Prepare a message for sending.

```php
public preSend(): bool
```

***

### postSend

Actually send a message via the selected mechanism.

```php
public postSend(): bool
```

***

### sendmailSend

Send mail using the $Sendmail program.

```php
protected sendmailSend(string $header, string $body): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string** | The message headers |
| `$body` | **string** | The message body |

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::$Sendmail -

***

### isShellSafe

Fix CVE-2016-10033 and CVE-2016-10045 by disallowing potentially unsafe shell characters.

```php
protected static isShellSafe(string $string): bool
```

Note that escapeshellarg and escapeshellcmd are inadequate for our purposes, especially on Windows.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to be validated |

**See Also:**

* https://github.com/PHPMailer/PHPMailer/issues/924 - CVE-2016-10045 bug report

***

### isPermittedPath

Check whether a file path is of a permitted type.

```php
protected static isPermittedPath(string $path): bool
```

Used to reject URLs and phar files from functions that access local file paths, such as addAttachment.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A relative or absolute path to a file |

***

### fileIsAccessible

Check whether a file path is safe, accessible, and readable.

```php
protected static fileIsAccessible(string $path): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A relative or absolute path to a file |

***

### mailSend

Send mail using the PHP mail() function.

```php
protected mailSend(string $header, string $body): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string** | The message headers |
| `$body` | **string** | The message body |

**See Also:**

* http://www.php.net/manual/en/book.mail.php -

***

### getSMTPInstance

Get an instance to use for SMTP operations.

```php
public getSMTPInstance(): \PHPMailer\PHPMailer\SMTP
```

Override this function to load your own SMTP implementation, or set one with setSMTPInstance.









***

### setSMTPInstance

Provide an instance to use for SMTP operations.

```php
public setSMTPInstance(\PHPMailer\PHPMailer\SMTP $smtp): \PHPMailer\PHPMailer\SMTP
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$smtp` | **\PHPMailer\PHPMailer\SMTP** |  |

***

### smtpSend

Send mail via SMTP.

```php
protected smtpSend(string $header, string $body): bool
```

Returns false if there is a bad MAIL FROM, RCPT, or DATA input.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string** | The message headers |
| `$body` | **string** | The message body |

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::setSMTPInstance() - to use a different class.

***

### smtpConnect

Initiate a connection to an SMTP server.

```php
public smtpConnect(array $options = null): bool
```

Returns false if the operation failed.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | An array of options compatible with stream_context_create() |

***

### smtpClose

Close the active SMTP session if one exists.

```php
public smtpClose(): mixed
```

***

### setLanguage

Set the language for error messages.

```php
public setLanguage(string $langcode = &#039;en&#039;, string $lang_path = &#039;&#039;): bool
```

The default language is English.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$langcode` | **
string** | ISO 639-1 2-character language code (e.g. French is &quot;fr&quot;)<br />Optionally, the language code can be enhanced with a 4-character<br />script annotation and/or a 2-character country annotation. |
| `$lang_path` | **
string** | Path to the language file directory, with trailing separator (slash)<br />Do not set this from user input! |

**Return Value:**

Returns true if the requested language was loaded, false otherwise.



***

### getTranslations

Get the array of strings for the current language.

```php
public getTranslations(): array
```

***

### addrAppend

Create recipient headers.

```php
public addrAppend(string $type, array $addr): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$addr` | **
array** | An array of recipients,<br />where each recipient is a 2-element indexed array with element 0 containing an address<br />and element 1 containing a name, like:<br />[[&#039;joe@example.com&#039;, &#039;Joe User&#039;], [&#039;zoe@example.com&#039;, &#039;Zoe User&#039;]] |

***

### addrFormat

Format an address for use in a message header.

```php
public addrFormat(array $addr): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addr` | **
array** | A 2-element indexed array, element 0 containing an address, element 1 containing a name like<br />[&#039;joe@example.com&#039;, &#039;Joe User&#039;] |

***

### wrapText

Word-wrap message.

```php
public wrapText(string $message, int $length, bool $qp_mode = false): string
```

For use with mailers that do not automatically perform wrapping and for quoted-printable encoded messages. Original
written by philippe.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to wrap |
| `$length` | **int** | The line length to wrap to |
| `$qp_mode` | **bool** | Whether to run in Quoted-Printable mode |

***

### utf8CharBoundary

Find the last character boundary prior to $maxLength in a utf-8 quoted-printable encoded string.

```php
public utf8CharBoundary(string $encodedText, int $maxLength): int
```

Original written by Colin Brown.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encodedText` | **string** | utf-8 QP text |
| `$maxLength` | **int** | Find the last character boundary prior to this length |

***

### setWordWrap

Apply word wrapping to the message body.

```php
public setWordWrap(): mixed
```

Wraps the message body to the number of chars set in the WordWrap property. You should only do this to plain-text bodies
as wrapping HTML tags may break them. This is called automatically by createBody(), so you don't need to call it
yourself.









***

### createHeader

Assemble message headers.

```php
public createHeader(): string
```

**Return Value:**

The assembled headers



***

### getMailMIME

Get the message MIME type headers.

```php
public getMailMIME(): string
```

***

### getSentMIMEMessage

Returns the whole MIME message.

```php
public getSentMIMEMessage(): string
```

Includes complete headers and body. Only valid post preSend().

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::preSend() -

***

### generateId

Create a unique ID to use for boundaries.

```php
protected generateId(): string
```

***

### createBody

Assemble the message body.

```php
public createBody(): string
```

Returns an empty string on failure.

**Return Value:**

The assembled message body



***

### getBoundary

Return the start of a message boundary.

```php
protected getBoundary(string $boundary, string $charSet, string $contentType, string $encoding): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boundary` | **string** |  |
| `$charSet` | **string** |  |
| `$contentType` | **string** |  |
| `$encoding` | **string** |  |

***

### endBoundary

Return the end of a message boundary.

```php
protected endBoundary(string $boundary): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boundary` | **string** |  |

***

### setMessageType

Set the message type.

```php
protected setMessageType(): mixed
```

PHPMailer only supports some preset message types, not arbitrary MIME structures.









***

### headerLine

Format a header line.

```php
public headerLine(string $name, string|int $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **string&#124;int** |  |

***

### textLine

Return a formatted mail line.

```php
public textLine(string $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### addAttachment

Add an attachment from a path on the filesystem.

```php
public addAttachment(string $path, string $name = &#039;&#039;, string $encoding = self::ENCODING_BASE64, string $type = &#039;&#039;, string $disposition = &#039;attachment&#039;): bool
```

Never use a user-supplied path to a file!
Returns false if the file could not be found or read. Explicitly *does not* support passing URLs; PHPMailer is not an
HTTP client. If you need to do that, fetch the resource yourself and pass it in via a local file or string.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the attachment |
| `$name` | **string** | Overrides the attachment name |
| `$encoding` | **string** | File encoding (see $Encoding) |
| `$type` | **string** | MIME type, e.g. `image/jpeg`; determined automatically from $path if not specified |
| `$disposition` | **string** | Disposition to use |

***

### getAttachments

Return the array of attachments.

```php
public getAttachments(): array
```

***

### attachAll

Attach all file, string, and binary attachments to the message.

```php
protected attachAll(string $disposition_type, string $boundary): string
```

Returns an empty string on failure.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$disposition_type` | **string** |  |
| `$boundary` | **string** |  |

***

### encodeFile

Encode a file attachment in requested format.

```php
protected encodeFile(string $path, string $encoding = self::ENCODING_BASE64): string
```

Returns an empty string on failure.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The full path to the file |
| `$encoding` | **
string** | The encoding to use; one of &#039;base64&#039;, &#039;7bit&#039;, &#039;8bit&#039;, &#039;binary&#039;, &#039;quoted-printable&#039; |

***

### encodeString

Encode a string in requested format.

```php
public encodeString(string $str, string $encoding = self::ENCODING_BASE64): string
```

Returns an empty string on failure.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | The text to encode |
| `$encoding` | **
string** | The encoding to use; one of &#039;base64&#039;, &#039;7bit&#039;, &#039;8bit&#039;, &#039;binary&#039;, &#039;quoted-printable&#039; |

***

### encodeHeader

Encode a header value (not including its label) optimally.

```php
public encodeHeader(string $str, string $position = &#039;text&#039;): string
```

Picks shortest of Q, B, or none. Result includes folding if needed. See RFC822 definitions for phrase, comment and text
positions.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | The header value to encode |
| `$position` | **string** | What context the string will be used in |

***

### hasMultiBytes

Check if a string contains multi-byte characters.

```php
public hasMultiBytes(string $str): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | multi-byte text to wrap encode |

***

### has8bitChars

Does a string contain any 8-bit chars (in any charset)?

```php
public has8bitChars(string $text): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |

***

### base64EncodeWrapMB

Encode and wrap long multibyte strings for mail headers without breaking lines within a character.

```php
public base64EncodeWrapMB(string $str, string $linebreak = null): string
```

Adapted from a function by paravoid.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | multi-byte text to wrap encode |
| `$linebreak` | **string** | string to use as linefeed/end-of-line |

**See Also:**

* http://www.php.net/manual/en/function.mb-encode-mimeheader.php#60283 -

***

### encodeQP

Encode a string in quoted-printable format.

```php
public encodeQP(string $string): string
```

According to RFC2045 section 6.7.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The text to encode |

***

### encodeQ

Encode a string using Q encoding.

```php
public encodeQ(string $str, string $position = &#039;text&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | the text to encode |
| `$position` | **string** | Where the text is going to be used, see the RFC for what that means |

**See Also:**

* http://tools.ietf.org/html/rfc2047#section-4.2 -

***

### addStringAttachment

Add a string or binary attachment (non-filesystem).

```php
public addStringAttachment(string $string, string $filename, string $encoding = self::ENCODING_BASE64, string $type = &#039;&#039;, string $disposition = &#039;attachment&#039;): bool
```

This method can be used to attach ascii or binary data, such as a BLOB record from a database.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | String attachment data |
| `$filename` | **string** | Name of the attachment |
| `$encoding` | **string** | File encoding (see $Encoding) |
| `$type` | **string** | File extension (MIME) type |
| `$disposition` | **string** | Disposition to use |

**Return Value:**

True on successfully adding an attachment



***

### addEmbeddedImage

Add an embedded (inline) attachment from a file.

```php
public addEmbeddedImage(string $path, string $cid, string $name = &#039;&#039;, string $encoding = self::ENCODING_BASE64, string $type = &#039;&#039;, string $disposition = &#039;inline&#039;): bool
```

This can include images, sounds, and just about any other document type. These differ from 'regular' attachments in that
they are intended to be displayed inline with the message, not just attached for download. This is used in HTML messages
that embed the images the HTML refers to using the `$cid` value in `img` tags, for example `<img src="cid:mylogo">`.
Never use a user-supplied path to a file!

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the attachment |
| `$cid` | **
string** | Content ID of the attachment; Use this to reference<br />the content when using an embedded image in HTML |
| `$name` | **string** | Overrides the attachment filename |
| `$encoding` | **string** | File encoding (see $Encoding) defaults to `base64` |
| `$type` | **string** | File MIME type (by default mapped from the `$path` filename&#039;s extension) |
| `$disposition` | **
string** | Disposition to use: `inline` (default) or `attachment`<br />(unlikely you want this – {@see `addAttachment()`} instead) |

**Return Value:**

True on successfully adding an attachment



***

### addStringEmbeddedImage

Add an embedded stringified attachment.

```php
public addStringEmbeddedImage(string $string, string $cid, string $name = &#039;&#039;, string $encoding = self::ENCODING_BASE64, string $type = &#039;&#039;, string $disposition = &#039;inline&#039;): bool
```

This can include images, sounds, and just about any other document type. If your filename doesn't contain an extension,
be sure to set the $type to an appropriate MIME type.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The attachment binary data |
| `$cid` | **
string** | Content ID of the attachment; Use this to reference<br />the content when using an embedded image in HTML |
| `$name` | **
string** | A filename for the attachment. If this contains an extension,<br />PHPMailer will attempt to set a MIME type for the attachment.<br />For example &#039;file.jpg&#039; would get an &#039;image/jpeg&#039; MIME type. |
| `$encoding` | **string** | File encoding (see $Encoding), defaults to &#039;base64&#039; |
| `$type` | **string** | MIME type - will be used in preference to any automatically derived type |
| `$disposition` | **string** | Disposition to use |

**Return Value:**

True on successfully adding an attachment



***

### validateEncoding

Validate encodings.

```php
protected validateEncoding(string $encoding): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** |  |

***

### cidExists

Check if an embedded attachment is present with this cid.

```php
protected cidExists(string $cid): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cid` | **string** |  |

***

### inlineImageExists

Check if an inline attachment is present.

```php
public inlineImageExists(): bool
```

***

### attachmentExists

Check if an attachment (non-inline) is present.

```php
public attachmentExists(): bool
```

***

### alternativeExists

Check if this message has an alternative body set.

```php
public alternativeExists(): bool
```

***

### clearQueuedAddresses

Clear queued addresses of given kind.

```php
public clearQueuedAddresses(string $kind): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** | &#039;to&#039;, &#039;cc&#039;, or &#039;bcc&#039; |

***

### clearAddresses

Clear all To recipients.

```php
public clearAddresses(): mixed
```

***

### clearCCs

Clear all CC recipients.

```php
public clearCCs(): mixed
```

***

### clearBCCs

Clear all BCC recipients.

```php
public clearBCCs(): mixed
```

***

### clearReplyTos

Clear all ReplyTo recipients.

```php
public clearReplyTos(): mixed
```

***

### clearAllRecipients

Clear all recipient types.

```php
public clearAllRecipients(): mixed
```

***

### clearAttachments

Clear all filesystem, string, and binary attachments.

```php
public clearAttachments(): mixed
```

***

### clearCustomHeaders

Clear all custom headers.

```php
public clearCustomHeaders(): mixed
```

***

### setError

Add an error message to the error container.

```php
protected setError(string $msg): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **string** |  |

***

### rfcDate

Return an RFC 822 formatted date.

```php
public static rfcDate(): string
```

* This method is **static**.

***

### serverHostname

Get the server hostname.

```php
protected serverHostname(): string
```

Returns 'localhost.localdomain' if unknown.









***

### isValidHost

Validate whether a string contains a valid value to use as a hostname or IP address.

```php
public static isValidHost(string $host): bool
```

IPv6 addresses must include [], e.g. `[::1]`, not just `::1`.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | The host name or IP address to check |

***

### lang

Get an error message in the current language.

```php
protected lang(string $key): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### getSmtpErrorMessage

Build an error message starting with a generic one and adding details if possible.

```php
private getSmtpErrorMessage(string $base_key): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base_key` | **string** |  |

***

### isError

Check if an error occurred.

```php
public isError(): bool
```

**Return Value:**

True if an error did occur



***

### addCustomHeader

Add a custom header.

```php
public addCustomHeader(string $name, string|null $value = null): mixed
```

$name value can be overloaded to contain both header name and value (name:value).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Custom header name |
| `$value` | **string&#124;null** | Header value |

***

### getCustomHeaders

Returns all custom headers.

```php
public getCustomHeaders(): array
```

***

### msgHTML

Create a message body from an HTML string.

```php
public msgHTML(string $message, string $basedir = &#039;&#039;, bool|callable $advanced = false): string
```

Automatically inlines images and creates a plain-text version by converting the HTML, overwriting any existing values in
Body and AltBody. Do not source $message content from user input!
$basedir is prepended when handling relative URLs, e.g. <img src="/images/a.png"> and must not be empty will look for an
image file in $basedir/images/a.png and convert it to inline. If you don't provide a $basedir, relative paths will be
left untouched (and thus probably break in email)
Converts data-uri images into embedded attachments. If you don't want to apply these transformations to your HTML, just
set Body and AltBody directly.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | HTML message string |
| `$basedir` | **string** | Absolute path to a base directory to prepend to relative paths to images |
| `$advanced` | **
bool&#124;callable** | Whether to use the internal HTML to text converter<br />or your own custom converter |

**Return Value:**

The transformed message body

**See Also:**

* \PHPMailer\PHPMailer\PHPMailer::html2text() -

***

### html2text

Convert an HTML string into plain text.

```php
public html2text(string $html, bool|callable $advanced = false): string
```

This is used by msgHTML(). Note - older versions of this function used a bundled advanced converter which was removed
for license reasons in #232. Example usage:

```php
//Use default conversion
$plain = $mail->html2text($html);
//Use your own custom converter
$plain = $mail->html2text($html, function($html) {
    $converter = new MyHtml2text($html);
    return $converter->get_text();
});
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$html` | **string** | The HTML text to convert |
| `$advanced` | **
bool&#124;callable** | Any boolean value to use the internal converter,<br />or provide your own callable for custom conversion.<br />*
Never* pass user-supplied data into this parameter |

***

### _mime_types

Get the MIME type for a file extension.

```php
public static _mime_types(string $ext = &#039;&#039;): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ext` | **string** | File extension |

**Return Value:**

MIME type of file



***

### filenameToType

Map a file name to a MIME type.

```php
public static filenameToType(string $filename): string
```

Defaults to 'application/octet-stream', i.e.. arbitrary binary data.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | A file name or full path, does not need to exist as a file |

***

### mb_pathinfo

Multi-byte-safe pathinfo replacement.

```php
public static mb_pathinfo(string $path, int|string $options = null): string|array
```

Drop-in replacement for pathinfo(), but multibyte- and cross-platform-safe.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A filename or path, does not need to exist as a file |
| `$options` | **
int&#124;string** | Either a PATHINFO_* constant,<br />or a string name to return only the specified piece |

**See Also:**

* http://www.php.net/manual/en/function.pathinfo.php#107461 -

***

### set

Set or reset instance properties.

```php
public set(string $name, mixed $value = &#039;&#039;): bool
```

You should avoid this function - it's more verbose, less efficient, more error-prone and harder to debug than setting
properties directly. Usage Example:
`$mail->set('SMTPSecure', static::ENCRYPTION_STARTTLS);`
is the same as:
`$mail->SMTPSecure = static::ENCRYPTION_STARTTLS;`.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The property name to set |
| `$value` | **mixed** | The value to set the property to |

***

### secureHeader

Strip newlines to prevent header injection.

```php
public secureHeader(string $str): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

***

### normalizeBreaks

Normalize line breaks in a string.

```php
public static normalizeBreaks(string $text, string $breaktype = null): string
```

Converts UNIX LF, Mac CR and Windows CRLF line breaks into a single line break format. Defaults to CRLF (for message
bodies) and preserves consecutive breaks.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |
| `$breaktype` | **string** | What kind of line break to use; defaults to static::$LE |

***

### stripTrailingWSP

Remove trailing breaks from a string.

```php
public static stripTrailingWSP(string $text): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |

**Return Value:**

The text to remove breaks from



***

### getLE

Return the current line break format string.

```php
public static getLE(): string
```

* This method is **static**.

***

### setLE

Set the line break format string, e.g. "\r\n".

```php
protected static setLE(string $le): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$le` | **string** |  |

***

### sign

Set the public and private key files and password for S/MIME signing.

```php
public sign(string $cert_filename, string $key_filename, string $key_pass, string $extracerts_filename = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cert_filename` | **string** |  |
| `$key_filename` | **string** |  |
| `$key_pass` | **string** | Password for private key |
| `$extracerts_filename` | **string** | Optional path to chain certificate |

***

### DKIM_QP

Quoted-Printable-encode a DKIM header.

```php
public DKIM_QP(string $txt): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$txt` | **string** |  |

***

### DKIM_Sign

Generate a DKIM signature.

```php
public DKIM_Sign(string $signHeader): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signHeader` | **string** |  |

**Return Value:**

The DKIM signature value



***

### DKIM_HeaderC

Generate a DKIM canonicalization header.

```php
public DKIM_HeaderC(string $signHeader): string
```

Uses the 'relaxed' algorithm from RFC6376 section 3.4.2. Canonicalized headers should *always* use CRLF, regardless of
mailer setting.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signHeader` | **string** | Header |

**See Also:**

* https://tools.ietf.org/html/rfc6376#section-3.4.2 -

***

### DKIM_BodyC

Generate a DKIM canonicalization body.

```php
public DKIM_BodyC(string $body): string
```

Uses the 'simple' algorithm from RFC6376 section 3.4.3. Canonicalized bodies should *always* use CRLF, regardless of
mailer setting.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **string** | Message Body |

**See Also:**

* https://tools.ietf.org/html/rfc6376#section-3.4.3 -

***

### DKIM_Add

Create the DKIM header and body in a new message header.

```php
public DKIM_Add(string $headers_line, string $subject, string $body): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers_line` | **string** | Header lines |
| `$subject` | **string** | Subject |
| `$body` | **string** | Body |

***

### hasLineLongerThanMax

Detect if a string contains a line longer than the maximum line length allowed by RFC 2822 section 2.1.1.

```php
public static hasLineLongerThanMax(string $str): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

***

### quotedString

If a string contains any "special" characters, double-quote the name, and escape any double quotes with a backslash.

```php
public static quotedString(string $str): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

**See Also:**

* \PHPMailer\PHPMailer\RFC822 - 3.4.1

***

### getToAddresses

Allows for public read access to 'to' property.

```php
public getToAddresses(): array
```

Before the send() call, queued addresses (i.e. with IDN) are not yet included.









***

### getCcAddresses

Allows for public read access to 'cc' property.

```php
public getCcAddresses(): array
```

Before the send() call, queued addresses (i.e. with IDN) are not yet included.









***

### getBccAddresses

Allows for public read access to 'bcc' property.

```php
public getBccAddresses(): array
```

Before the send() call, queued addresses (i.e. with IDN) are not yet included.









***

### getReplyToAddresses

Allows for public read access to 'ReplyTo' property.

```php
public getReplyToAddresses(): array
```

Before the send() call, queued addresses (i.e. with IDN) are not yet included.









***

### getAllRecipientAddresses

Allows for public read access to 'all_recipients' property.

```php
public getAllRecipientAddresses(): array
```

Before the send() call, queued addresses (i.e. with IDN) are not yet included.









***

### doCallback

Perform a callback.

```php
protected doCallback(bool $isSent, array $to, array $cc, array $bcc, string $subject, string $body, string $from, array $extra): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isSent` | **bool** |  |
| `$to` | **array** |  |
| `$cc` | **array** |  |
| `$bcc` | **array** |  |
| `$subject` | **string** |  |
| `$body` | **string** |  |
| `$from` | **string** |  |
| `$extra` | **array** |  |

***

### getOAuth

Get the OAuthTokenProvider instance.

```php
public getOAuth(): \PHPMailer\PHPMailer\OAuthTokenProvider
```

***

### setOAuth

Set an OAuthTokenProvider instance.

```php
public setOAuth(\PHPMailer\PHPMailer\OAuthTokenProvider $oauth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oauth` | **\PHPMailer\PHPMailer\OAuthTokenProvider** |  |

***


***

