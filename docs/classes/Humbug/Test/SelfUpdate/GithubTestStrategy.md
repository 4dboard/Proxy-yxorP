***

# GithubTestStrategy





* Full name: `\Humbug\Test\SelfUpdate\GithubTestStrategy`
* Parent class: [`\Humbug\SelfUpdate\Strategy\GithubStrategy`](../../SelfUpdate/Strategy/GithubStrategy.md)




## Methods


### getApiUrl



```php
protected getApiUrl(): mixed
```











***


## Inherited methods


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

### setCurrentLocalVersion

Set version string of the local phar

```php
public setCurrentLocalVersion(string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### setPackageName

Set Package name

```php
public setPackageName(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getPackageName

Get Package name

```php
public getPackageName(): string
```











***

### setPharName

Set phar file's name

```php
public setPharName(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getPharName

Get phar file's name

```php
public getPharName(): string
```











***

### setStability

Set target stability

```php
public setStability(string $stability): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stability` | **string** |  |




***

### getStability

Get target stability

```php
public getStability(): string
```











***

### getApiUrl



```php
protected getApiUrl(): mixed
```











***

### getDownloadUrl



```php
protected getDownloadUrl(array $package): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$package` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
