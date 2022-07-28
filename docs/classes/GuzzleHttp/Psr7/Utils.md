***

# Utils





* Full name: `\GuzzleHttp\Psr7\Utils`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### caselessRemove

Remove the items given by the keys, case insensitively from the data.

```php
public static caselessRemove(string[] $keys, array $data): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **string[]** |  |
| `$data` | **array** |  |




***

### copyToStream

Copy the contents of a stream into another stream until the given number
of bytes have been read.

```php
public static copyToStream(\Psr\Http\Message\StreamInterface $source, \Psr\Http\Message\StreamInterface $dest, int $maxLen = -1): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Psr\Http\Message\StreamInterface** | Stream to read from |
| `$dest` | **\Psr\Http\Message\StreamInterface** | Stream to write to |
| `$maxLen` | **int** | Maximum number of bytes to read. Pass -1<br />to read the entire stream. |




***

### copyToString

Copy the contents of a stream into a string until the given number of
bytes have been read.

```php
public static copyToString(\Psr\Http\Message\StreamInterface $stream, int $maxLen = -1): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to read |
| `$maxLen` | **int** | Maximum number of bytes to read. Pass -1<br />to read the entire stream. |




***

### hash

Calculate a hash of a stream.

```php
public static hash(\Psr\Http\Message\StreamInterface $stream, string $algo, bool $rawOutput = false): string
```

This method reads the entire stream to calculate a rolling hash, based
on PHP's `hash_init` functions.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to calculate the hash for |
| `$algo` | **string** | Hash algorithm (e.g. md5, crc32, etc) |
| `$rawOutput` | **bool** | Whether or not to use raw output |




***

### modifyRequest

Clone and modify a request with the given changes.

```php
public static modifyRequest(\Psr\Http\Message\RequestInterface $request, array $changes): \Psr\Http\Message\RequestInterface
```

This method is useful for reducing the number of clones needed to mutate
a message.

The changes can be one of:
- method: (string) Changes the HTTP method.
- set_headers: (array) Sets the given headers.
- remove_headers: (array) Remove the given headers.
- body: (mixed) Sets the given body.
- uri: (UriInterface) Set the URI.
- query: (string) Set the query string value of the URI.
- version: (string) Set the protocol version.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request to clone and modify. |
| `$changes` | **array** | Changes to apply. |




***

### readLine

Read a line from the stream up to the maximum allowed buffer length.

```php
public static readLine(\Psr\Http\Message\StreamInterface $stream, int|null $maxLength = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to read from |
| `$maxLength` | **int&#124;null** | Maximum buffer length |




***

### streamFor

Create a new stream based on the input type.

```php
public static streamFor(resource|string|int|float|bool|\Psr\Http\Message\StreamInterface|callable|\Iterator|null $resource = &#039;&#039;, array $options = []): \Psr\Http\Message\StreamInterface
```

Options is an associative array that can contain the following keys:
- metadata: Array of custom metadata.
- size: Size of the stream.

This method accepts the following `$resource` types:
- `Psr\Http\Message\StreamInterface`: Returns the value as-is.
- `string`: Creates a stream object that uses the given string as the contents.
- `resource`: Creates a stream object that wraps the given PHP stream resource.
- `Iterator`: If the provided value implements `Iterator`, then a read-only
  stream object will be created that wraps the given iterable. Each time the
  stream is read from, data from the iterator will fill a buffer and will be
  continuously called until the buffer is equal to the requested read size.
  Subsequent read calls will first read from the buffer and then call `next`
  on the underlying iterator until it is exhausted.
- `object` with `__toString()`: If the object has the `__toString()` method,
  the object will be cast to a string and then a stream will be returned that
  uses the string value.
- `NULL`: When `null` is passed, an empty stream object is returned.
- `callable` When a callable is passed, a read-only stream object will be
  created that invokes the given callable. The callable is invoked with the
  number of suggested bytes to read. The callable can return any number of
  bytes, but MUST return `false` when there is no more data to return. The
  stream object that wraps the callable will invoke the callable until the
  number of requested bytes are available. Any additional bytes will be
  buffered and used in subsequent reads.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource&#124;string&#124;int&#124;float&#124;bool&#124;\Psr\Http\Message\StreamInterface&#124;callable&#124;\Iterator&#124;null** | Entity body data |
| `$options` | **array** |  |




***

### tryFopen

Safely opens a PHP stream resource using a filename.

```php
public static tryFopen(string $filename, string $mode): resource
```

When fopen fails, PHP normally raises a warning. This function adds an
error handler that checks for errors and throws an exception instead.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | File to open |
| `$mode` | **string** | Mode used to open the file |




***

### tryGetContents

Safely gets the contents of a given stream.

```php
public static tryGetContents(resource $stream): string
```

When stream_get_contents fails, PHP normally raises a warning. This
function adds an error handler that checks for errors and throws an
exception instead.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** |  |




***

### uriFor

Returns a UriInterface for the given value.

```php
public static uriFor(string|\Psr\Http\Message\UriInterface $uri): \Psr\Http\Message\UriInterface
```

This function accepts a string or UriInterface and returns a
UriInterface for the given value. If the value is already a
UriInterface, it is returned as-is.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string&#124;\Psr\Http\Message\UriInterface** |  |




***


***

