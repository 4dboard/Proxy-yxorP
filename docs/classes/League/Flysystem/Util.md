***

# Util





* Full name: `\League\Flysystem\Util`




## Methods


### pathinfo

Get normalized pathinfo.

```php
public static pathinfo(string $path): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

pathinfo



***

### normalizeDirname

Normalize a dirname return value.

```php
public static normalizeDirname(string $dirname): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |


**Return Value:**

normalized dirname



***

### dirname

Get a normalized dirname from a path.

```php
public static dirname(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

dirname



***

### map

Map result arrays.

```php
public static map(array $object, array $map): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **array** |  |
| `$map` | **array** |  |


**Return Value:**

mapped result



***

### normalizePath

Normalize path.

```php
public static normalizePath(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### normalizeRelativePath

Normalize relative directories in a path.

```php
public static normalizeRelativePath(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### removeFunkyWhiteSpace

Rejects unprintable characters and invalid unicode characters.

```php
protected static removeFunkyWhiteSpace(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

$path



***

### normalizePrefix

Normalize prefix.

```php
public static normalizePrefix(string $prefix, string $separator): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |
| `$separator` | **string** |  |


**Return Value:**

normalized path



***

### contentSize

Get content size.

```php
public static contentSize(string $contents): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |


**Return Value:**

content size



***

### guessMimeType

Guess MIME Type based on the path of the file and it's content.

```php
public static guessMimeType(string $path, string|resource $content): string|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$content` | **string&#124;resource** |  |


**Return Value:**

MIME Type or NULL if no extension detected



***

### emulateDirectories

Emulate directories.

```php
public static emulateDirectories(array $listing): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listing` | **array** |  |


**Return Value:**

listing with emulated directories



***

### ensureConfig

Ensure a Config instance.

```php
public static ensureConfig(null|array|\League\Flysystem\Config $config): \League\Flysystem\Config
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **null&#124;array&#124;\League\Flysystem\Config** |  |


**Return Value:**

config instance



***

### rewindStream

Rewind a stream.

```php
public static rewindStream(resource $resource): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |




***

### isSeekableStream



```php
public static isSeekableStream(mixed $resource): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### getStreamSize

Get the size of a stream.

```php
public static getStreamSize(resource $resource): int|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **resource** |  |


**Return Value:**

stream size



***

### emulateObjectDirectories

Emulate the directories of a single object.

```php
protected static emulateObjectDirectories(array $object, array $directories, array $listedDirectories): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **array** |  |
| `$directories` | **array** |  |
| `$listedDirectories` | **array** |  |




***

### basename

Returns the trailing name component of the path.

```php
private static basename(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***


***

