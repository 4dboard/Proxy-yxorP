***

# VersionParser





* Full name: `\Humbug\SelfUpdate\VersionParser`



## Properties


### versions



```php
private array $versions
```






***

### modifier



```php
private string $modifier
```






***

## Methods


### __construct



```php
public __construct(array $versions = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$versions` | **array** |  |




***

### getMostRecentStable

Get the most recent stable numbered version from versions passed to
constructor (if any)

```php
public getMostRecentStable(): string
```











***

### getMostRecentUnStable

Get the most recent unstable numbered version from versions passed to
constructor (if any)

```php
public getMostRecentUnStable(): string
```











***

### getMostRecentAll

Get the most recent stable or unstable numbered version from versions passed to
constructor (if any)

```php
public getMostRecentAll(): string
```











***

### isStable

Checks if given version string represents a stable numbered version

```php
public isStable(string $version): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### isPreRelease

Checks if given version string represents a 'pre-release' version, i.e.

```php
public isPreRelease(string $version): bool
```

it's unstable but not development level.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### isUnstable

Checks if given version string represents an unstable or dev-level
numbered version

```php
public isUnstable(string $version): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### isDevelopment

Checks if given version string represents a dev-level numbered version

```php
public isDevelopment(string $version): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### selectRecentStable



```php
private selectRecentStable(): mixed
```











***

### selectRecentUnstable



```php
private selectRecentUnstable(): mixed
```











***

### selectRecentAll



```php
private selectRecentAll(): mixed
```











***

### findMostRecent



```php
private findMostRecent(array $candidates): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$candidates` | **array** |  |




***

### stable



```php
private stable(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### development



```php
private development(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
