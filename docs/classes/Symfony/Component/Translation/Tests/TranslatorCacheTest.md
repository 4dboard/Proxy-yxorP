***

# TranslatorCacheTest





* Full name: `\Symfony\Component\Translation\Tests\TranslatorCacheTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)



## Properties


### tmpDir



```php
protected $tmpDir
```






***

## Methods


### setUp



```php
protected setUp(): mixed
```











***

### tearDown



```php
protected tearDown(): mixed
```











***

### deleteTmpDir



```php
protected deleteTmpDir(): mixed
```











***

### testThatACacheIsUsed



```php
public testThatACacheIsUsed(mixed $debug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **mixed** |  |




***

### testCatalogueIsReloadedWhenResourcesAreNoLongerFresh



```php
public testCatalogueIsReloadedWhenResourcesAreNoLongerFresh(): mixed
```











***

### testDifferentTranslatorsForSameLocaleDoNotOverwriteEachOthersCache



```php
public testDifferentTranslatorsForSameLocaleDoNotOverwriteEachOthersCache(mixed $debug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **mixed** |  |




***

### testDifferentCacheFilesAreUsedForDifferentSetsOfFallbackLocales



```php
public testDifferentCacheFilesAreUsedForDifferentSetsOfFallbackLocales(): mixed
```











***

### testPrimaryAndFallbackCataloguesContainTheSameMessagesRegardlessOfCaching



```php
public testPrimaryAndFallbackCataloguesContainTheSameMessagesRegardlessOfCaching(): mixed
```











***

### testRefreshCacheWhenResourcesAreNoLongerFresh



```php
public testRefreshCacheWhenResourcesAreNoLongerFresh(): mixed
```











***

### getCatalogue



```php
protected getCatalogue(mixed $locale, mixed $messages, mixed $resources = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |
| `$messages` | **mixed** |  |
| `$resources` | **mixed** |  |




***

### runForDebugAndProduction



```php
public runForDebugAndProduction(): mixed
```











***

### createFailingLoader



```php
private createFailingLoader(): \Symfony\Component\Translation\Loader\LoaderInterface
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
