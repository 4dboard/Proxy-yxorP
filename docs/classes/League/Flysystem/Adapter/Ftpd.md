***

# Ftpd

* Full name: `\League\Flysystem\Adapter\Ftpd`
* Parent class: [`\League\Flysystem\Adapter\Ftp`](./Ftp.md)

## Methods

### getMetadata

```php
public getMetadata(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### listDirectoryContents

```php
protected listDirectoryContents(mixed $directory, mixed $recursive = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** |  |
| `$recursive` | **mixed** |  |

***

## Inherited methods

### setTransferMode

Set the transfer mode.

```php
public setTransferMode(int $mode): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **int** |  |

***

### setSsl

Set if Ssl is enabled.

```php
public setSsl(bool $ssl): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ssl` | **bool** |  |

***

### setPassive

Set if passive mode should be used.

```php
public setPassive(bool $passive = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$passive` | **bool** |  |

***

### setIgnorePassiveAddress

```php
public setIgnorePassiveAddress(bool $ignorePassiveAddress): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignorePassiveAddress` | **bool** |  |

***

### setRecurseManually

```php
public setRecurseManually(bool $recurseManually): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recurseManually` | **bool** |  |

***

### setUtf8

```php
public setUtf8(bool $utf8): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$utf8` | **bool** |  |

***

### connect

Establish a connection.

```php
public connect(): mixed
```

* This method is **abstract**.

***

### setUtf8Mode

Set the connection to UTF-8 mode.

```php
protected setUtf8Mode(): mixed
```

***

### setConnectionPassiveMode

Set the connections to passive mode.

```php
protected setConnectionPassiveMode(): mixed
```

***

### setConnectionRoot

Set the connection root.

```php
protected setConnectionRoot(): mixed
```

***

### login

Login.

```php
protected login(): mixed
```

***

### disconnect

Close the connection.

```php
public disconnect(): mixed
```

* This method is **abstract**.

***

### write

```php
public write(mixed $path, mixed $contents, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### writeStream

```php
public writeStream(string $path, resource $resource, \League\Flysystem\Config $config): resource
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### update

```php
public update(mixed $path, mixed $contents, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### updateStream

```php
public updateStream(mixed $path, mixed $resource, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$resource` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### rename

```php
public rename(mixed $path, mixed $newpath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$newpath` | **mixed** |  |

***

### delete

```php
public delete(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### deleteDir

```php
public deleteDir(mixed $dirname): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** |  |

***

### createDir

```php
public createDir(mixed $dirname, \League\Flysystem\Config $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |

***

### createActualDirectory

Create a directory.

```php
protected createActualDirectory(string $directory, resource $connection): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |
| `$connection` | **resource** |  |

***

### getMetadata

```php
public getMetadata(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getMimetype

```php
public getMimetype(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getTimestamp

```php
public getTimestamp(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### read

```php
public read(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### readStream

```php
public readStream(string $path): resource
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### setVisibility

```php
public setVisibility(mixed $path, mixed $visibility): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$visibility` | **mixed** |  |

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

### listDirectoryContentsRecursive

```php
protected listDirectoryContentsRecursive(string $directory): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |

***

### isConnected

Check if a connection is active.

```php
public isConnected(): bool
```

* This method is **abstract**.

***

### isPureFtpdServer

```php
protected isPureFtpdServer(): bool
```

***

### ftpRawlist

The ftp_rawlist function with optional escaping.

```php
protected ftpRawlist(string $options, string $path): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string** |  |
| `$path` | **string** |  |

***

### getRawExecResponseCode

```php
private getRawExecResponseCode(mixed $command): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **mixed** |  |

***

### hasFtpConnection

```php
private hasFtpConnection(): bool
```

***

### copy

Copy a file.

```php
public copy(string $path, string $newpath): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$newpath` | **string** |  |

***

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
'-rw-r--r-- 1 ftp ftp 409 Aug 19 09:01 file1.txt'

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

Note: The 'MLSD' command is a machine-readable replacement for 'LIST' but many FTP servers do not support it :(

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

### escapePath

```php
protected escapePath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

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

