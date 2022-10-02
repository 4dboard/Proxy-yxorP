***

# MessageFormatter

Formats log messages using variable substitutions for requests, responses,
and other transactional data.

The following variable substitutions are supported:

- {request}:        Full HTTP request message
- {response}:       Full HTTP response message
- {ts}:             ISO 8601 date in GMT
- {date_iso_8601} ISO 8601 date in GMT
- {date_common_log} Apache common log date using the configured timezone.
- {host}:           Host of the request
- {method}:         Method of the request
- {uri}:            URI of the request
- {version}:        Protocol version
- {target}:         Request target of the request (path + query + fragment)
- {hostname}:       Hostname of the machine that sent the request
- {code}:           Status code of the response (if available)
- {phrase}:         Reason phrase of the response  (if available)
- {error}:          Any error messages (if available)
- {req_header_*}:   Replace `*` with the lowercased name of a request header to add to the message
- {res_header_*}:   Replace `*` with the lowercased name of a response header to add to the message
- {req_headers}:    Request headers
- {res_headers}:    Response headers
- {req_body}:       Request body
- {res_body}:       Response body

* Full name: `\GuzzleHttp\MessageFormatter`
* This class implements:
  [`\GuzzleHttp\MessageFormatterInterface`](./MessageFormatterInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CLF`|public|string|&quot;{hostname} {req_header_User-Agent} - [{date_common_log}] \&quot;{method} {target} HTTP/{version}\&quot; {code} {res_header_Content-Length}&quot;|
|`DEBUG`|public| |&quot;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;\n{request}\n&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;\n{response}\n--------\n{error}&quot;|
|`SHORT`|public| |&#039;[{ts}] &quot;{method} {target} HTTP/{version}&quot; {code}&#039;|

## Properties

### template

```php
private string $template
```

***

## Methods

### __construct

```php
public __construct(string $template = self::CLF): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **string** | Log message template |

***

### format

Returns a formatted message string.

```php
public format(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface|null $response = null, \Throwable|null $error = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request that was sent |
| `$response` | **\Psr\Http\Message\ResponseInterface&#124;null** | Response that was received |
| `$error` | **\Throwable&#124;null** | Exception that was received |

***

### headers

Get headers from message as string

```php
private headers(\Psr\Http\Message\MessageInterface $message): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\Psr\Http\Message\MessageInterface** |  |

***


***

