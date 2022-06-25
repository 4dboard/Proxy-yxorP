***

# UpdaterTest





* Full name: `\Humbug\Test\SelfUpdate\UpdaterTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)



## Properties


### files



```php
private $files
```






***

### updater



```php
private \Humbug\SelfUpdate\Updater $updater
```






***

### tmp



```php
private $tmp
```






***

## Methods


### setup



```php
public setup(): mixed
```











***

### teardown



```php
public teardown(): mixed
```











***

### testConstruction



```php
public testConstruction(): mixed
```











***

### testConstructorThrowsExceptionIfPubKeyNotExistsButFlagTrue



```php
public testConstructorThrowsExceptionIfPubKeyNotExistsButFlagTrue(): mixed
```











***

### testConstructorAncilliaryValues



```php
public testConstructorAncilliaryValues(): mixed
```











***

### testSetPharUrlWithUrl



```php
public testSetPharUrlWithUrl(): mixed
```











***

### testSetPharUrlThrowsExceptionOnInvalidUrl



```php
public testSetPharUrlThrowsExceptionOnInvalidUrl(): mixed
```











***

### testSetVersionUrlWithUrl



```php
public testSetVersionUrlWithUrl(): mixed
```











***

### testSetVersionUrlThrowsExceptionOnInvalidUrl



```php
public testSetVersionUrlThrowsExceptionOnInvalidUrl(): mixed
```











***

### testCanDetectNewRemoteVersionAndStoreVersions



```php
public testCanDetectNewRemoteVersionAndStoreVersions(): mixed
```











***

### testThrowsExceptionOnEmptyRemoteVersion



```php
public testThrowsExceptionOnEmptyRemoteVersion(): mixed
```











***

### testThrowsExceptionOnInvalidRemoteVersion



```php
public testThrowsExceptionOnInvalidRemoteVersion(): mixed
```











***

### testUpdatePhar



```php
public testUpdatePhar(): mixed
```











***

### testUpdatePharFailsIfCurrentPublicKeyEmpty



```php
public testUpdatePharFailsIfCurrentPublicKeyEmpty(): mixed
```











***

### testUpdatePharFailsIfCurrentPublicKeyInvalid



```php
public testUpdatePharFailsIfCurrentPublicKeyInvalid(): mixed
```











***

### testUpdatePharFailsOnExpectedSignatureMismatch



```php
public testUpdatePharFailsOnExpectedSignatureMismatch(): mixed
```











***

### testUpdatePharFailsIfDownloadPharIsUnsignedWhenExpected



```php
public testUpdatePharFailsIfDownloadPharIsUnsignedWhenExpected(): mixed
```











***

### testSetBackupPathSetsThePathWhenTheDirectoryExistsAndIsWriteable



```php
public testSetBackupPathSetsThePathWhenTheDirectoryExistsAndIsWriteable(): mixed
```











***

### testSetRestorePathSetsThePathWhenTheDirectoryExistsAndIsWriteable



```php
public testSetRestorePathSetsThePathWhenTheDirectoryExistsAndIsWriteable(): mixed
```











***

### testCanSetCustomStrategyObjects

Custom Strategies

```php
public testCanSetCustomStrategyObjects(): mixed
```











***

### getPharOutput

Helpers

```php
private getPharOutput(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### deleteTempPhars



```php
private deleteTempPhars(): mixed
```











***

### createTestPharAndKey



```php
private createTestPharAndKey(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
