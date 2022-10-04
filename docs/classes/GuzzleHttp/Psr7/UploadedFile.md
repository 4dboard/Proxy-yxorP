***

# UploadedFile





* Full name: `\GuzzleHttp\Psr7\UploadedFile`
* This class implements:
[`\Psr\Http\Message\UploadedFileInterface`](../../Psr/Http/Message/UploadedFileInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ERRORS`|private| |[UPLOAD_ERR_OK, UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, UPLOAD_ERR_EXTENSION]|

## Properties


### clientFilename



```php
private string|null $clientFilename
```






***

### clientMediaType



```php
private string|null $clientMediaType
```






***

### error



```php
private int $error
```






***

### file



```php
private string|null $file
```






***

### moved



```php
private bool $moved
```






***

### size



```php
private int|null $size
```






***

### stream



```php
private \Psr\Http\Message\StreamInterface|null $stream
```






***

## Methods


### __construct



```php
public __construct(\Psr\Http\Message\StreamInterface|string|resource $streamOrFile, ?int $size, int $errorStatus, string $clientFilename = null, string $clientMediaType = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streamOrFile` | **\Psr\Http\Message\StreamInterface&#124;string&#124;resource** |  |
| `$size` | **?int** |  |
| `$errorStatus` | **int** |  |
| `$clientFilename` | **string** |  |
| `$clientMediaType` | **string** |  |




***

### setStreamOrFile

Depending on the value set file or stream variable

```php
private setStreamOrFile(\Psr\Http\Message\StreamInterface|string|resource $streamOrFile): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streamOrFile` | **\Psr\Http\Message\StreamInterface&#124;string&#124;resource** |  |




***

### setError



```php
private setError(int $error): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **int** |  |




***

### isStringNotEmpty



```php
private isStringNotEmpty(mixed $param): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **mixed** |  |




***

### isOk

Return true if there is no upload error

```php
private isOk(): bool
```











***

### isMoved



```php
public isMoved(): bool
```











***

### validateActive



```php
private validateActive(): void
```











***

### getStream

Retrieve a stream representing the uploaded file.

```php
public getStream(): \Psr\Http\Message\StreamInterface
```

This method MUST return a StreamInterface instance, representing the
uploaded file. The purpose of this method is to allow utilizing native PHP
stream functionality to manipulate the file upload, such as
stream_copy_to_stream() (though the result will need to be decorated in a
native PHP stream wrapper to work with such functions).

If the moveTo() method has been called previously, this method MUST raise
an exception.







**Return Value:**

Stream representation of the uploaded file.



***

### moveTo

Move the uploaded file to a new location.

```php
public moveTo(mixed $targetPath): void
```

Use this method as an alternative to move_uploaded_file(). This method is
guaranteed to work in both SAPI and non-SAPI environments.
Implementations must determine which environment they are in, and use the
appropriate method (move_uploaded_file(), rename(), or a stream
operation) to perform the operation.

$targetPath may be an absolute path, or a relative path. If it is a
relative path, resolution should be the same as used by PHP's rename()
function.

The original file or stream MUST be removed on completion.

If this method is called more than once, any subsequent calls MUST raise
an exception.

When used in an SAPI environment where $_FILES is populated, when writing
files via moveTo(), is_uploaded_file() and move_uploaded_file() SHOULD be
used to ensure permissions and upload status are verified correctly.

If you wish to move to a stream, use getStream(), as SAPI operations
cannot guarantee writing to stream destinations.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetPath` | **mixed** | Path to which to move the uploaded file. |




***

### getSize

Retrieve the file size.

```php
public getSize(): int|null
```

Implementations SHOULD return the value stored in the "size" key of
the file in the $_FILES array if available, as PHP calculates this based
on the actual size transmitted.







**Return Value:**

The file size in bytes or null if unknown.



***

### getError

Retrieve the error associated with the uploaded file.

```php
public getError(): int
```

The return value MUST be one of PHP's UPLOAD_ERR_XXX constants.

If the file was uploaded successfully, this method MUST return
UPLOAD_ERR_OK.

Implementations SHOULD return the value stored in the "error" key of
the file in the $_FILES array.







**Return Value:**

One of PHP's UPLOAD_ERR_XXX constants.



***

### getClientFilename

Retrieve the filename sent by the client.

```php
public getClientFilename(): string|null
```

Do not trust the value returned by this method. A client could send
a malicious filename with the intention to corrupt or hack your
application.

Implementations SHOULD return the value stored in the "name" key of
the file in the $_FILES array.







**Return Value:**

The filename sent by the client or null if none
was provided.



***

### getClientMediaType

Retrieve the media type sent by the client.

```php
public getClientMediaType(): string|null
```

Do not trust the value returned by this method. A client could send
a malicious media type with the intention to corrupt or hack your
application.

Implementations SHOULD return the value stored in the "type" key of
the file in the $_FILES array.







**Return Value:**

The media type sent by the client or null if none
was provided.



***


***

