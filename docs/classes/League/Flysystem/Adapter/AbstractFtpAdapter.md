***

# AbstractFtpAdapter





* Full name: `\League\Flysystem\Adapter\AbstractFtpAdapter`
* Parent class: [`\League\Flysystem\Adapter\AbstractAdapter`](./AbstractAdapter.md)
* This class is an **Abstract class**



## Properties


### connection



```php
protected mixed $connection
```






***

### host



```php
protected string $host
```






***

### port



```php
protected int $port
```






***

### ssl



```php
protected bool $ssl
```






***

### timeout



```php
protected int $timeout
```






***

### passive



```php
protected bool $passive
```






***

### separator



```php
protected string $separator
```






***

### root



```php
protected string|null $root
```






***

### permPublic



```php
protected int $permPublic
```






***

### permPrivate



```php
protected int $permPrivate
```






***

### configurable



```php
protected array $configurable
```






***

### systemType



```php
protected string $systemType
```






***

### safeStorage



```php
protected \League\Flysystem\SafeStorage $safeStorage
```






***

### enableTimestampsOnUnixListings

True to enable timestamps for FTP servers that return unix-style listings.

```php
protected bool $enableTimestampsOnUnixListings
```






***

## Methods


### __construct

Constructor.

```php
public __construct(array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### setConfig

Set the config.

```php
public setConfig(array $config): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### getHost

Returns the host.

```php
public getHost(): string
```











***

### setHost

Set the host.

```php
public setHost(string $host): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** |  |




***

### setPermPublic

Set the public permission value.

```php
public setPermPublic(int $permPublic): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permPublic` | **int** |  |




***

### setPermPrivate

Set the private permission value.

```php
public setPermPrivate(int $permPrivate): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permPrivate` | **int** |  |




***

### getPort

Returns the ftp port.

```php
public getPort(): int
```











***

### getRoot

Returns the root folder to work from.

```php
public getRoot(): string
```











***

### setPort

Set the ftp port.

```php
public setPort(int|string $port): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$port` | **int&#124;string** |  |




***

### setRoot

Set the root folder to work from.

```php
public setRoot(string $root): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |




***

### getUsername

Returns the ftp username.

```php
public getUsername(): string
```









**Return Value:**

username



***

### setUsername

Set ftp username.

```php
public setUsername(string $username): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$username` | **string** |  |




***

### getPassword

Returns the password.

```php
public getPassword(): string
```









**Return Value:**

password



***

### setPassword

Set the ftp password.

```php
public setPassword(string $password): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** |  |




***

### getTimeout

Returns the amount of seconds before the connection will timeout.

```php
public getTimeout(): int
```











***

### setTimeout

Set the amount of seconds before the connection should timeout.

```php
public setTimeout(int $timeout): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int** |  |




***

### getSystemType

Return the FTP system type.

```php
public getSystemType(): string
```











***

### setSystemType

Set the FTP system type (windows or unix).

```php
public setSystemType(string $systemType): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$systemType` | **string** |  |




***

### setEnableTimestampsOnUnixListings

True to enable timestamps for FTP servers that return unix-style listings.

```php
public setEnableTimestampsOnUnixListings(bool $bool = false): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **bool** |  |




***

### listContents



```php
public listContents(mixed $directory = &#039;&#039;, mixed $recursive = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** |  |
| `$recursive` | **mixed** |  |




***

### listDirectoryContents



```php
protected listDirectoryContents(mixed $directory, mixed $recursive = false): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** |  |
| `$recursive` | **mixed** |  |




***

### normalizeListing

Normalize a directory listing.

```php
protected normalizeListing(array $listing, string $prefix = &#039;&#039;): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listing` | **array** |  |
| `$prefix` | **string** |  |


**Return Value:**

directory listing



***

### sortListing

Sort a directory listing.

```php
protected sortListing(array $result): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **array** |  |


**Return Value:**

sorted listing



***

### normalizeObject

Normalize a file entry.

```php
protected normalizeObject(string $item, string $base): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **string** |  |
| `$base` | **string** |  |


**Return Value:**

normalized file array



***

### normalizeUnixObject

Normalize a Unix file entry.

```php
protected normalizeUnixObject(string $item, string $base): array
```

Given $item contains:
   '-rw-r--r--   1 ftp      ftp           409 Aug 19 09:01 file1.txt'

This function will return:
[
  'type' => 'file',
  'path' => 'file1.txt',
  'visibility' => 'public',
  'size' => 409,
  'timestamp' => 1566205260
]






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **string** |  |
| `$base` | **string** |  |


**Return Value:**

normalized file array



***

### normalizeUnixTimestamp

Only accurate to the minute (current year), or to the day.

```php
protected normalizeUnixTimestamp(string $month, string $day, string $timeOrYear): int
```

Inadequacies in timestamp accuracy are due to limitations of the FTP 'LIST' command

Note: The 'MLSD' command is a machine-readable replacement for 'LIST'
but many FTP servers do not support it :(






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$month` | **string** | e.g. &#039;Aug&#039; |
| `$day` | **string** | e.g. &#039;19&#039; |
| `$timeOrYear` | **string** | e.g. &#039;09:01&#039; OR &#039;2015&#039; |




***

### normalizeWindowsObject

Normalize a Windows/DOS file entry.

```php
protected normalizeWindowsObject(string $item, string $base): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **string** |  |
| `$base` | **string** |  |


**Return Value:**

normalized file array



***

### detectSystemType

Get the system type from a listing item.

```php
protected detectSystemType(string $item): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **string** |  |


**Return Value:**

the system type



***

### detectType

Get the file type from the permissions.

```php
protected detectType(string $permissions): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **string** |  |


**Return Value:**

file type



***

### normalizePermissions

Normalize a permissions string.

```php
protected normalizePermissions(string $permissions): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **string** |  |




***

### removeDotDirectories

Filter out dot-directories.

```php
public removeDotDirectories(array $list): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **array** |  |




***

### has



```php
public has(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### getSize



```php
public getSize(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### getVisibility



```php
public getVisibility(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### ensureDirectory

Ensure a directory exists.

```php
public ensureDirectory(string $dirname): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |




***

### getConnection



```php
public getConnection(): mixed
```











***

### getPermPublic

Get the public permission value.

```php
public getPermPublic(): int
```











***

### getPermPrivate

Get the private permission value.

```php
public getPermPrivate(): int
```











***

### __destruct

Disconnect on destruction.

```php
public __destruct(): mixed
```











***

### connect

Establish a connection.

```php
public connect(): mixed
```




* This method is **abstract**.






***

### disconnect

Close the connection.

```php
public disconnect(): mixed
```




* This method is **abstract**.






***

### isConnected

Check if a connection is active.

```php
public isConnected(): bool
```




* This method is **abstract**.






***

### escapePath



```php
protected escapePath(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***


## Inherited methods


### setPathPrefix

Set the path prefix.

```php
public setPathPrefix(string $prefix): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### getPathPrefix

Get the path prefix.

```php
public getPathPrefix(): string|null
```









**Return Value:**

path prefix or null if pathPrefix is empty



***

### applyPathPrefix

Prefix a path.

```php
public applyPathPrefix(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

prefixed path



***

### removePathPrefix

Remove a path prefix.

```php
public removePathPrefix(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |


**Return Value:**

path without the prefix



***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
