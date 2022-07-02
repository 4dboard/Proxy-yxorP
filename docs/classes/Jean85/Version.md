***

# Version





* Full name: `\Jean85\Version`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SHORT_COMMIT_LENGTH`|public| |\Jean85\PrettyVersions::SHORT_COMMIT_LENGTH|

## Properties


### packageName



```php
private string $packageName
```






***

### shortVersion



```php
private string $shortVersion
```






***

### commitHash



```php
private string $commitHash
```






***

### versionIsTagged



```php
private bool $versionIsTagged
```






***

## Methods


### __construct



```php
public __construct(string $packageName, string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |
| `$version` | **string** |  |




***

### getPrettyVersion



```php
public getPrettyVersion(): string
```











***

### getFullVersion



```php
public getFullVersion(): string
```











***

### getVersionWithShortReference



```php
public getVersionWithShortReference(): string
```











***

### getVersionWithShortCommit



```php
public getVersionWithShortCommit(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getPackageName



```php
public getPackageName(): string
```











***

### getShortVersion



```php
public getShortVersion(): string
```











***

### getReference



```php
public getReference(): string
```











***

### getCommitHash



```php
public getCommitHash(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getShortReference



```php
public getShortReference(): string
```











***

### getShortCommitHash



```php
public getShortCommitHash(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### __toString



```php
public __toString(): string
```











***


***
> yxorP Documentation
