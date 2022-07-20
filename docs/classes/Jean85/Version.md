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

### getShortVersion



```php
public getShortVersion(): string
```











***

### getFullVersion



```php
public getFullVersion(): string
```











***

### getCommitHash



```php
public getCommitHash(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getReference



```php
public getReference(): string
```











***

### getPackageName



```php
public getPackageName(): string
```











***

### __toString



```php
public __toString(): string
```











***

### getPrettyVersion



```php
public getPrettyVersion(): string
```











***

### getVersionWithShortCommit



```php
public getVersionWithShortCommit(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getVersionWithShortReference



```php
public getVersionWithShortReference(): string
```











***

### getShortCommitHash



```php
public getShortCommitHash(): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getShortReference



```php
public getShortReference(): string
```











***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
