***

# PhpMemoryArray

PHP Memory array loader.

* Full name: `\Zend\I18n\Translator\Loader\PhpMemoryArray`
* This class implements:
  [`\Zend\I18n\Translator\Loader\RemoteLoaderInterface`](./RemoteLoaderInterface.md)

## Properties

### messages

```php
protected array $messages
```

***

## Methods

### __construct

```php
public __construct(mixed $messages): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** |  |

***

### load

Load translations from a remote source.

```php
public load(string $locale, string $textDomain): \Zend\I18n\Translator\TextDomain|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |
| `$textDomain` | **string** |  |

yxorP::get('REQUEST')
