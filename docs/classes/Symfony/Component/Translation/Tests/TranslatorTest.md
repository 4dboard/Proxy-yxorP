***

# TranslatorTest





* Full name: `\Symfony\Component\Translation\Tests\TranslatorTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)




## Methods


### testConstructorInvalidLocale



```php
public testConstructorInvalidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testConstructorValidLocale



```php
public testConstructorValidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testConstructorWithoutLocale



```php
public testConstructorWithoutLocale(): mixed
```











***

### testSetGetLocale



```php
public testSetGetLocale(): mixed
```











***

### testSetInvalidLocale



```php
public testSetInvalidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testSetValidLocale



```php
public testSetValidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testGetCatalogue



```php
public testGetCatalogue(): mixed
```











***

### testGetCatalogueReturnsConsolidatedCatalogue



```php
public testGetCatalogueReturnsConsolidatedCatalogue(): mixed
```











***

### testSetFallbackLocales



```php
public testSetFallbackLocales(): mixed
```











***

### testSetFallbackLocalesMultiple



```php
public testSetFallbackLocalesMultiple(): mixed
```











***

### testSetFallbackInvalidLocales



```php
public testSetFallbackInvalidLocales(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testSetFallbackValidLocales



```php
public testSetFallbackValidLocales(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testTransWithFallbackLocale



```php
public testTransWithFallbackLocale(): mixed
```











***

### testAddResourceInvalidLocales



```php
public testAddResourceInvalidLocales(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testAddResourceValidLocales



```php
public testAddResourceValidLocales(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testAddResourceAfterTrans



```php
public testAddResourceAfterTrans(): mixed
```











***

### testTransWithoutFallbackLocaleFile



```php
public testTransWithoutFallbackLocaleFile(mixed $format, mixed $loader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **mixed** |  |
| `$loader` | **mixed** |  |




***

### testTransWithFallbackLocaleFile



```php
public testTransWithFallbackLocaleFile(mixed $format, mixed $loader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **mixed** |  |
| `$loader` | **mixed** |  |




***

### testTransWithFallbackLocaleBis



```php
public testTransWithFallbackLocaleBis(): mixed
```











***

### testTransWithFallbackLocaleTer



```php
public testTransWithFallbackLocaleTer(): mixed
```











***

### testTransNonExistentWithFallback



```php
public testTransNonExistentWithFallback(): mixed
```











***

### testWhenAResourceHasNoRegisteredLoader



```php
public testWhenAResourceHasNoRegisteredLoader(): mixed
```











***

### testFallbackCatalogueResources



```php
public testFallbackCatalogueResources(): mixed
```











***

### testTrans



```php
public testTrans(mixed $expected, mixed $id, mixed $translation, mixed $parameters, mixed $locale, mixed $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$id` | **mixed** |  |
| `$translation` | **mixed** |  |
| `$parameters` | **mixed** |  |
| `$locale` | **mixed** |  |
| `$domain` | **mixed** |  |




***

### testTransInvalidLocale



```php
public testTransInvalidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testTransValidLocale



```php
public testTransValidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testFlattenedTrans



```php
public testFlattenedTrans(mixed $expected, mixed $messages, mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$messages` | **mixed** |  |
| `$id` | **mixed** |  |




***

### testTransChoice



```php
public testTransChoice(mixed $expected, mixed $id, mixed $translation, mixed $number, mixed $parameters, mixed $locale, mixed $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$id` | **mixed** |  |
| `$translation` | **mixed** |  |
| `$number` | **mixed** |  |
| `$parameters` | **mixed** |  |
| `$locale` | **mixed** |  |
| `$domain` | **mixed** |  |




***

### testTransChoiceInvalidLocale



```php
public testTransChoiceInvalidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### testTransChoiceValidLocale



```php
public testTransChoiceValidLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** |  |




***

### getTransFileTests



```php
public getTransFileTests(): mixed
```











***

### getTransTests



```php
public getTransTests(): mixed
```











***

### getFlattenedTransTests



```php
public getFlattenedTransTests(): mixed
```











***

### getTransChoiceTests



```php
public getTransChoiceTests(): mixed
```











***

### getInvalidLocalesTests



```php
public getInvalidLocalesTests(): mixed
```











***

### getValidLocalesTests



```php
public getValidLocalesTests(): mixed
```











***

### testTransChoiceFallback



```php
public testTransChoiceFallback(): mixed
```











***

### testTransChoiceFallbackBis



```php
public testTransChoiceFallbackBis(): mixed
```











***

### testTransChoiceFallbackWithNoTranslation



```php
public testTransChoiceFallbackWithNoTranslation(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
