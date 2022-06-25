***

# Translator

Translator proxy for phpDocumentor.

This class encapsulates (or actually extends) a Translator object that can be used to translate messages from the
fallback language to another.

This encapsulation serves two purposes;

1. To make a migration to another translator easier if necessary
2. To fix a bug in Zend\I18n\Translator\Translator where the cache is not cleared when new messages are added.

Due to issue 2 this class extends the Zend Translator and does not use composition to proxy calls to the translator; as
such it is not recommended to use any public function not defined in this proxy as it may be removed.

Before invoking the {@see} method the user must first load a series of translation messages in the desired locale; this
can be done by invoking the {@see} or {@see} methods. These try to include a file containing a plain PHP Array and merge
that with the translation table of this translator.

An example of a translation file can be:

```
return array(
    'KEY' => 'translated message',
);
```

* Full name: `\phpDocumentor\Translator\Translator`
* Parent class: [`\Zend\I18n\Translator\Translator`](../../Zend/I18n/Translator/Translator.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TRANSLATION_FILE_TYPE`|public|string|&#039;phparray&#039;|
|`DEFAULT_LOCALE`|public|string|&#039;en&#039;|
|`DEFAULT_DOMAIN`|public|string|&#039;default&#039;|
|`DEFAULT_PATTERN`|public|string|&#039;%s.php&#039;|

## Methods

### __construct

Pre-set the translator with the default locale as fallback.

```php
public __construct(): mixed
```

***

### setLocale

Sets the default locale to use when translating messages.

```php
public setLocale(string $locale): \phpDocumentor\Translator\Translator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### addTranslations

Adds a translation file for a specific locale, or the default locale when none is provided.

```php
public addTranslations(string $filename, string|null $locale = self::DEFAULT_LOCALE, string $textDomain = self::DEFAULT_DOMAIN): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Name of the file to add. |
| `$locale` | **
string&#124;null** | The locale to assign to, matches<br />{@link ISO-639-1} and defaults to en (English). |
| `$textDomain` | **
string** | Translations may be divided into separate files / domains; this represents in<br />which domain the translation should be. |

***

### addTranslationFolder

Adds a folder with files containing translation sources.

```php
public addTranslationFolder(string $folder, string[] $domains = array()): $this
```

This method scans the provided folder for any file matching the following format:

    `[domain].[locale].php`

If the domain matches the {@see default domain} then that part is omitted and the filename should match:

    `[locale].php`

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$folder` | **string** | Name of the folder, it is recommended to use an absolute path. |
| `$domains` | **string[]** | One or more domains to load, when none is provided only the default is added. |

**See Also:**

* http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes - for a list of ISO-639-1 locale codes as used by this method.

***

### translate

Attempts to translate the given message or code into the provided locale.

```php
public translate(string $message, string $textDomain = self::DEFAULT_DOMAIN, null $locale = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message or code to translate. |
| `$textDomain` | **string** | A message may be located in a domain, here you can provide in which. |
| `$locale` | **null** | The locale to translate to or the default if not set. |

***

## Inherited methods

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
