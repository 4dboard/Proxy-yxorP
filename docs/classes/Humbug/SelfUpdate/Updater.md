***

# Updater

* Full name: `\Humbug\SelfUpdate\Updater`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`STRATEGY_SHA1`|public| |&#039;sha1&#039;|
|`STRATEGY_GITHUB`|public| |&#039;github&#039;|

## Properties

### strategy

```php
protected \Humbug\SelfUpdate\Strategy\StrategyInterface $strategy
```

***

### localPharFile

```php
protected string $localPharFile
```

***

### localPharFileBasename

```php
protected string $localPharFileBasename
```

***

### localPubKeyFile

```php
protected string $localPubKeyFile
```

***

### hasPubKey

```php
protected bool $hasPubKey
```

***

### tempDirectory

```php
protected string $tempDirectory
```

***

### newVersion

```php
protected string $newVersion
```

***

### oldVersion

```php
protected string $oldVersion
```

***

### backupExtension

```php
protected string $backupExtension
```

***

### backupPath

```php
protected string $backupPath
```

***

### restorePath

```php
protected string $restorePath
```

***

### newVersionAvailable

```php
protected bool $newVersionAvailable
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $localPharFile = null, bool $hasPubKey = true, string $strategy = self::STRATEGY_SHA1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$localPharFile` | **string** |  |
| `$hasPubKey` | **bool** |  |
| `$strategy` | **string** |  |

***

### hasUpdate

Check for update

```php
public hasUpdate(): bool
```

***

### update

Perform an update

```php
public update(): bool
```

***

### rollback

Perform an rollback to previous version

```php
public rollback(): bool
```

***

### setStrategy

```php
public setStrategy(string $strategy): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **string** |  |

***

### setStrategyObject

```php
public setStrategyObject(\Humbug\SelfUpdate\Strategy\StrategyInterface $strategy): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\Humbug\SelfUpdate\Strategy\StrategyInterface** |  |

***

### getStrategy

```php
public getStrategy(): mixed
```

***

### setBackupExtension

Set backup extension for old phar versions

```php
public setBackupExtension(string $extension): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** |  |

***

### getBackupExtension

Get backup extension for old phar versions

```php
public getBackupExtension(): string
```

***

### getLocalPharFile

```php
public getLocalPharFile(): mixed
```

***

### getLocalPharFileBasename

```php
public getLocalPharFileBasename(): mixed
```

***

### getLocalPubKeyFile

```php
public getLocalPubKeyFile(): mixed
```

***

### getTempDirectory

```php
public getTempDirectory(): mixed
```

***

### getTempPharFile

```php
public getTempPharFile(): mixed
```

***

### getNewVersion

```php
public getNewVersion(): mixed
```

***

### getOldVersion

```php
public getOldVersion(): mixed
```

***

### setBackupPath

Set backup path for old phar versions

```php
public setBackupPath(string $filePath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePath` | **string** |  |

***

### getBackupPath

Get backup path for old phar versions

```php
public getBackupPath(): string
```

***

### setRestorePath

Set path for the backup phar to rollback/restore from

```php
public setRestorePath(string $filePath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePath` | **string** |  |

***

### getRestorePath

Get path for the backup phar to rollback/restore from

```php
public getRestorePath(): string
```

***

### throwRuntimeException

```php
public throwRuntimeException(mixed $errno, mixed $errstr): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **mixed** |  |
| `$errstr` | **mixed** |  |

***

### throwHttpRequestException

```php
public throwHttpRequestException(mixed $errno, mixed $errstr): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **mixed** |  |
| `$errstr` | **mixed** |  |

***

### hasPubKey

```php
protected hasPubKey(): mixed
```

***

### newVersionAvailable

```php
protected newVersionAvailable(): mixed
```

***

### backupPhar

```php
protected backupPhar(): mixed
```

***

### downloadPhar

```php
protected downloadPhar(): mixed
```

***

### replacePhar

```php
protected replacePhar(): mixed
```

***

### restorePhar

```php
protected restorePhar(): mixed
```

***

### getBackupPharFile

```php
protected getBackupPharFile(): mixed
```

***

### getRestorePharFile

```php
protected getRestorePharFile(): mixed
```

***

### getTempPubKeyFile

```php
protected getTempPubKeyFile(): mixed
```

***

### setLocalPharFile

```php
protected setLocalPharFile(mixed $localPharFile): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$localPharFile` | **mixed** |  |

***

### setLocalPubKeyFile

```php
protected setLocalPubKeyFile(): mixed
```

***

### setTempDirectory

```php
protected setTempDirectory(): mixed
```

***

### validatePhar

```php
protected validatePhar(mixed $phar): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phar` | **mixed** |  |

***

### cleanupAfterError

```php
protected cleanupAfterError(): mixed
```

yxorP::get('REQUEST')
