***

# Translator

Translator.



* Full name: `\Symfony\Component\Translation\Translator`
* This class implements:
[`\Symfony\Component\Translation\TranslatorInterface`](./TranslatorInterface.md), [`\Symfony\Component\Translation\TranslatorBagInterface`](./TranslatorBagInterface.md)



## Properties


### catalogues



```php
protected \Symfony\Component\Translation\MessageCatalogueInterface[] $catalogues
```






***

### locale



```php
private string $locale
```






***

### fallbackLocales



```php
private array $fallbackLocales
```






***

### loaders



```php
private \Symfony\Component\Translation\Loader\LoaderInterface[] $loaders
```






***

### resources



```php
private array $resources
```






***

### selector



```php
private \Symfony\Component\Translation\MessageSelector $selector
```






***

### cacheDir



```php
private string $cacheDir
```






***

### debug



```php
private bool $debug
```






***

### configCacheFactory



```php
private \Symfony\Component\Config\ConfigCacheFactoryInterface|null $configCacheFactory
```






***

## Methods


### __construct

Constructor.

```php
public __construct(string $locale, \Symfony\Component\Translation\MessageSelector|null $selector = null, string|null $cacheDir = null, bool $debug = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | The locale |
| `$selector` | **\Symfony\Component\Translation\MessageSelector&#124;null** | The message selector for pluralization |
| `$cacheDir` | **string&#124;null** | The directory to use for the cache |
| `$debug` | **bool** | Use cache in debug mode ? |




***

### setConfigCacheFactory

Sets the ConfigCache factory to use.

```php
public setConfigCacheFactory(\Symfony\Component\Config\ConfigCacheFactoryInterface $configCacheFactory): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configCacheFactory` | **\Symfony\Component\Config\ConfigCacheFactoryInterface** |  |




***

### addLoader

Adds a Loader.

```php
public addLoader(string $format, \Symfony\Component\Translation\Loader\LoaderInterface $loader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The name of the loader (@see addResource()) |
| `$loader` | **\Symfony\Component\Translation\Loader\LoaderInterface** | A LoaderInterface instance |




***

### addResource

Adds a Resource.

```php
public addResource(string $format, mixed $resource, string $locale, string $domain = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The name of the loader (@see addLoader()) |
| `$resource` | **mixed** | The resource name |
| `$locale` | **string** | The locale |
| `$domain` | **string** | The domain |




***

### setLocale

Sets the current locale.

```php
public setLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** | The locale |




***

### getLocale

Returns the current locale.

```php
public getLocale(): string
```









**Return Value:**

The locale



***

### setFallbackLocales

Sets the fallback locales.

```php
public setFallbackLocales(array $locales): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locales` | **array** | The fallback locales |




***

### getFallbackLocales

Gets the fallback locales.

```php
public getFallbackLocales(): array
```









**Return Value:**

$locales The fallback locales



***

### trans

Translates the given message.

```php
public trans(mixed $id, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |


**Return Value:**

The translated string



***

### transChoice

Translates the given choice message by choosing a translation according to a number.

```php
public transChoice(mixed $id, mixed $number, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$number` | **mixed** | The number to use to find the indice of the message |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |


**Return Value:**

The translated string



***

### getCatalogue

Gets the catalogue by locale.

```php
public getCatalogue(mixed $locale = null): \Symfony\Component\Translation\MessageCatalogueInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** | The locale or null to use the default |




***

### getLoaders

Gets the loaders.

```php
protected getLoaders(): array
```









**Return Value:**

LoaderInterface[]



***

### loadCatalogue



```php
protected loadCatalogue(string $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |




***

### initializeCatalogue



```php
protected initializeCatalogue(string $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |




***

### initializeCacheCatalogue



```php
private initializeCacheCatalogue(string $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |




***

### dumpCatalogue



```php
private dumpCatalogue(mixed $locale, \Symfony\Component\Config\ConfigCacheInterface $cache): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |
| `$cache` | **\Symfony\Component\Config\ConfigCacheInterface** |  |




***

### getFallbackContent



```php
private getFallbackContent(\Symfony\Component\Translation\MessageCatalogue $catalogue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogue** |  |




***

### getCatalogueCachePath



```php
private getCatalogueCachePath(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### doLoadCatalogue



```php
private doLoadCatalogue(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### loadFallbackCatalogues



```php
private loadFallbackCatalogues(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### computeFallbackLocales



```php
protected computeFallbackLocales(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### assertValidLocale

Asserts that the locale is valid, throws an Exception if not.

```php
protected assertValidLocale(string $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | Locale to tests |




***

### getConfigCacheFactory

Provides the ConfigCache factory implementation, falling back to a
default implementation if necessary.

```php
private getConfigCacheFactory(): \Symfony\Component\Config\ConfigCacheFactoryInterface
```









**Return Value:**

$configCacheFactory



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
