***

# UploadedFile





* Full name: `\yxorP\lib\proxy\Psr7\UploadedFile`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\UploadedFileInterface`](../../../inc/Psr/Http/Message/UploadedFileInterface.md)



## Properties


### errors



```php
private static int[] $errors
```



* This property is **static**.


***

### clientFilename



```php
private string $clientFilename
```






***

### clientMediaType



```php
private string $clientMediaType
```






***

### error



```php
private int $error
```






***

### file



```php
private null|string $file
```






***

### moved



```php
private bool $moved
```






***

### size



```php
private int $size
```






***

### stream



```php
private \yxorP\inc\Psr\Http\Message\StreamInterface|null $stream
```






***

## Methods


### __construct



```php
public __construct(\yxorP\inc\Psr\Http\Message\StreamInterface|string|resource $streamOrFile, int $size, int $errorStatus, string|null $clientFilename = null, string|null $clientMediaType = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streamOrFile` | **\yxorP\inc\Psr\Http\Message\StreamInterface&#124;string&#124;resource** |  |
| `$size` | **int** |  |
| `$errorStatus` | **int** |  |
| `$clientFilename` | **string&#124;null** |  |
| `$clientMediaType` | **string&#124;null** |  |




***

### isMoved



```php
public isMoved(): bool
```











***

### getStream

Retrieve a stream representing the uploaded file.

```php
public getStream(): \yxorP\inc\Psr\Http\Message\StreamInterface
```









**Return Value:**

Stream representation of the uploaded file.



***

### moveTo

Move the uploaded file to a new location.

```php
public moveTo(string $targetPath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetPath` | **string** | Path to which to move the uploaded file. |



**See Also:**

* http://php.net/is_uploaded_file - * http://php.net/move_uploaded_file - 

***

### getSize

Retrieve the file size.

```php
public getSize(): int|null
```









**Return Value:**

The file size in bytes or null if unknown.



***

### getError

Retrieve the error associated with the uploaded file.

```php
public getError(): int
```









**Return Value:**

One of PHP's UPLOAD_ERR_XXX constants.


**See Also:**

* http://php.net/manual/en/features.file-upload.errors.php - 

***

### getClientFilename

Retrieve the filename sent by the client.

```php
public getClientFilename(): string|null
```









**Return Value:**

The filename sent by the client or null if none
was provided.



***

### getClientMediaType

Retrieve the media type sent by the client.

```php
public getClientMediaType(): string|null
```









**Return Value:**

The media type sent by the client or null if none
was provided.



***

### setStreamOrFile

Depending on the value set file or stream variable

```php
private setStreamOrFile(mixed $streamOrFile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streamOrFile` | **mixed** |  |




***

### setError



```php
private setError(int $error): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **int** |  |




***

### setSize



```php
private setSize(int $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** |  |




***

### isStringOrNull



```php
private isStringOrNull(mixed $param): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **mixed** |  |




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

### setClientFilename



```php
private setClientFilename(string|null $clientFilename): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientFilename` | **string&#124;null** |  |




***

### setClientMediaType



```php
private setClientMediaType(string|null $clientMediaType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientMediaType` | **string&#124;null** |  |




***

### isOk

Return true if there is no upload error

```php
private isOk(): bool
```











***

### validateActive



```php
private validateActive(): mixed
```











***


***

