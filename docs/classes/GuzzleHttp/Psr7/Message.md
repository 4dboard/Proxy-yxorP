***

# Message





* Full name: `\GuzzleHttp\Psr7\Message`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### toString

Returns the string representation of an HTTP message.

```php
public static toString(\Psr\Http\Message\MessageInterface $message): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\Psr\Http\Message\MessageInterface** | Message to convert to a string. |




***

### bodySummary

Get a short summary of the message body.

```php
public static bodySummary(\Psr\Http\Message\MessageInterface $message, int $truncateAt = 120): ?string
```

Will return `null` if the response is not printable.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\Psr\Http\Message\MessageInterface** | The message to get the body summary |
| `$truncateAt` | **int** | The maximum allowed size of the summary |




***

### rewindBody

Attempts to rewind a message body and throws an exception on failure.

```php
public static rewindBody(\Psr\Http\Message\MessageInterface $message): void
```

The body of the message will only be rewound if a call to `tell()`
returns a value other than `0`.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\Psr\Http\Message\MessageInterface** | Message to rewind |




***

### parseMessage

Parses an HTTP message into an associative array.

```php
public static parseMessage(string $message): array
```

The array contains the "start-line" key containing the start line of
the message, "headers" key containing an associative array of header
array values, and a "body" key containing the body of the message.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | HTTP request or response to parse. |




***

### parseRequestUri

Constructs a URI for an HTTP request message.

```php
public static parseRequestUri(string $path, array $headers): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path from the start-line |
| `$headers` | **array** | Array of headers (each value an array). |




***

### parseRequest

Parses a request message string into a request object.

```php
public static parseRequest(string $message): \Psr\Http\Message\RequestInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Request message string. |




***

### parseResponse

Parses a response message string into a response object.

```php
public static parseResponse(string $message): \Psr\Http\Message\ResponseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Response message string. |




***


***

