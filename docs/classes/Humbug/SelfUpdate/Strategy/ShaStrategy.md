***

# ShaStrategy

* Full name: `\Humbug\SelfUpdate\Strategy\ShaStrategy`
* This class implements:
  [`\Humbug\SelfUpdate\Strategy\StrategyInterface`](./StrategyInterface.md)

## Properties

### versionUrl

```php
protected string $versionUrl
```

***

### pharUrl

```php
protected string $pharUrl
```

***

## Methods

### download

Download the remote Phar file.

```php
public download(\Humbug\SelfUpdate\Updater $updater): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |

***

### getCurrentRemoteVersion

Retrieve the current version available remotely.

```php
public getCurrentRemoteVersion(\Humbug\SelfUpdate\Updater $updater): string|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |

***

### getCurrentLocalVersion

Retrieve the current version of the local phar file.

```php
public getCurrentLocalVersion(\Humbug\SelfUpdate\Updater $updater): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |

***

### setPharUrl

Set URL to phar file

```php
public setPharUrl(string $url): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

***

### getPharUrl

Get URL for phar file

```php
public getPharUrl(): string
```

***

### setVersionUrl

Set URL to version file

```php
public setVersionUrl(string $url): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

***

### getVersionUrl

Get URL for version file

```php
public getVersionUrl(): string
```

***

### validateAllowedUrl

```php
protected validateAllowedUrl(mixed $url): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |

yxorP::get('REQUEST')
