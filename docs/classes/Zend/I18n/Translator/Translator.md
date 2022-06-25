***

# Translator

Translator.

* Full name: `\Zend\I18n\Translator\Translator`
* This class implements:
  [`\Zend\I18n\Translator\TranslatorInterface`](./TranslatorInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EVENT_MISSING_TRANSLATION`|public| |&#039;missingTranslation&#039;|
|`EVENT_NO_MESSAGES_LOADED`|public| |&#039;noMessagesLoaded&#039;|

## Properties

### messages

Messages loaded by the translator.

```php
protected array $messages
```

***

### files

Files used for loading messages.

```php
protected array $files
```

***

### patterns

Patterns used for loading messages.

```php
protected array $patterns
```

***

### remote

Remote locations for loading messages.

```php
protected array $remote
```

***

### locale

Default locale.

```php
protected string $locale
```

***

### fallbackLocale

Locale to use as fallback if there is no translation.

```php
protected string $fallbackLocale
```

***

### cache

Translation cache.

```php
protected \Zend\Cache\Storage\StorageInterface $cache
```

***

### pluginManager

Plugin manager for translation loaders.

```php
protected \Zend\I18n\Translator\LoaderPluginManager $pluginManager
```

***

### events

Event manager for triggering translator events.

```php
protected \Zend\EventManager\EventManagerInterface $events
```

***

### eventsEnabled

Whether events are enabled

```php
protected bool $eventsEnabled
```

***

## Methods

### factory

Instantiate a translator

```php
public static factory(array|\Traversable $options): \Zend\I18n\Translator\Translator
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### setLocale

Set the default locale.

```php
public setLocale(string $locale): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### getLocale

Get the default locale.

```php
public getLocale(): string
```

***

### setFallbackLocale

Set the fallback locale.

```php
public setFallbackLocale(string $locale): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### getFallbackLocale

Get the fallback locale.

```php
public getFallbackLocale(): string
```

***

### setCache

Sets a cache

```php
public setCache(\Zend\Cache\Storage\StorageInterface $cache = null): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Zend\Cache\Storage\StorageInterface** |  |

***

### getCache

Returns the set cache

```php
public getCache(): \Zend\Cache\Storage\StorageInterface
```

**Return Value:**

The set cache



***

### setPluginManager

Set the plugin manager for translation loaders

```php
public setPluginManager(\Zend\I18n\Translator\LoaderPluginManager $pluginManager): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pluginManager` | **\Zend\I18n\Translator\LoaderPluginManager** |  |

***

### getPluginManager

Retrieve the plugin manager for translation loaders.

```php
public getPluginManager(): \Zend\I18n\Translator\LoaderPluginManager
```

Lazy loads an instance if none currently set.









***

### translate

Translate a message.

```php
public translate(string $message, string $textDomain = &#039;default&#039;, string $locale = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### translatePlural

Translate a plural message.

```php
public translatePlural(string $singular, string $plural, int $number, string $textDomain = &#039;default&#039;, string|null $locale = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singular` | **string** |  |
| `$plural` | **string** |  |
| `$number` | **int** |  |
| `$textDomain` | **string** |  |
| `$locale` | **string&#124;null** |  |

***

### getTranslatedMessage

Get a translated message.

```php
protected getTranslatedMessage(string $message, string $locale, string $textDomain = &#039;default&#039;): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$locale` | **string** |  |
| `$textDomain` | **string** |  |

***

### addTranslationFile

Add a translation file.

```php
public addTranslationFile(string $type, string $filename, string $textDomain = &#039;default&#039;, string $locale = null): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$filename` | **string** |  |
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### addTranslationFilePattern

Add multiple translations with a file pattern.

```php
public addTranslationFilePattern(string $type, string $baseDir, string $pattern, string $textDomain = &#039;default&#039;): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$baseDir` | **string** |  |
| `$pattern` | **string** |  |
| `$textDomain` | **string** |  |

***

### addRemoteTranslations

Add remote translations.

```php
public addRemoteTranslations(string $type, string $textDomain = &#039;default&#039;): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$textDomain` | **string** |  |

***

### loadMessages

Load messages for a given language and domain.

```php
protected loadMessages(string $textDomain, string $locale): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### loadMessagesFromRemote

Load messages from remote sources.

```php
protected loadMessagesFromRemote(string $textDomain, string $locale): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### loadMessagesFromPatterns

Load messages from patterns.

```php
protected loadMessagesFromPatterns(string $textDomain, string $locale): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### loadMessagesFromFiles

Load messages from files.

```php
protected loadMessagesFromFiles(string $textDomain, string $locale): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |
| `$locale` | **string** |  |

***

### getAllMessages

Return all the messages.

```php
public getAllMessages(string $textDomain = &#039;default&#039;, null $locale = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |
| `$locale` | **null** |  |

***

### getEventManager

Get the event manager.

```php
public getEventManager(): \Zend\EventManager\EventManagerInterface|null
```

***

### setEventManager

Set the event manager instance used by this translator.

```php
public setEventManager(\Zend\EventManager\EventManagerInterface $events): \Zend\I18n\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |

***

### isEventManagerEnabled

Check whether the event manager is enabled.

```php
public isEventManagerEnabled(): bool
```

***

### enableEventManager

Enable the event manager.

```php
public enableEventManager(): \Zend\I18n\Translator\Translator
```

***

### disableEventManager

Disable the event manager.

```php
public disableEventManager(): \Zend\I18n\Translator\Translator
```

yxorP::get('REQUEST')
