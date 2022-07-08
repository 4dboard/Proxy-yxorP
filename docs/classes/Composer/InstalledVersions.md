***

# InstalledVersions





* Full name: `\Composer\InstalledVersions`



## Properties


### installed



```php
private static $installed
```



* This property is **static**.


***

## Methods


### getInstalledPackages



```php
public static getInstalledPackages(): mixed
```



* This method is **static**.







***

### isInstalled



```php
public static isInstalled(mixed $packageName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **mixed** |  |




***

### satisfies



```php
public static satisfies(\Composer\Semver\VersionParser $parser, mixed $packageName, mixed $constraint): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Composer\Semver\VersionParser** |  |
| `$packageName` | **mixed** |  |
| `$constraint` | **mixed** |  |




***

### getVersionRanges



```php
public static getVersionRanges(mixed $packageName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **mixed** |  |




***

### getVersion



```php
public static getVersion(mixed $packageName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **mixed** |  |




***

### getPrettyVersion



```php
public static getPrettyVersion(mixed $packageName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **mixed** |  |




***

### getReference



```php
public static getReference(mixed $packageName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **mixed** |  |




***

### getRootPackage



```php
public static getRootPackage(): mixed
```



* This method is **static**.







***

### getRawData



```php
public static getRawData(): mixed
```



* This method is **static**.







***

### reload



```php
public static reload(mixed $data): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
