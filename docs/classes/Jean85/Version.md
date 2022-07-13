***

# Version





* Full name: `\Jean85\Version`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SHORT_COMMIT_LENGTH`|private| |7|
|`NO_VERSION_TEXT`|public| |&#039;{no version}&#039;|
|`NO_REFERENCE_TEXT`|public| |&#039;{no reference}&#039;|

## Properties


### packageName



```php
private string $packageName
```






***

### prettyVersion



```php
private string $prettyVersion
```






***

### reference



```php
private string $reference
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
public __construct(string $packageName, ?string $prettyVersion = null, ?string $reference = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |
| `$prettyVersion` | **?string** |  |
| `$reference` | **?string** |  |




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

### __toString



```php
public __toString(): string
```











***


***

