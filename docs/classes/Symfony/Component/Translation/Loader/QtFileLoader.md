***

# QtFileLoader

QtFileLoader loads translations from QT Translations XML files.

* Full name: `\Symfony\Component\Translation\Loader\QtFileLoader`
* This class implements:
  [`\Symfony\Component\Translation\Loader\LoaderInterface`](./LoaderInterface.md)

## Methods

### load

Loads a locale.

```php
public load(mixed $resource, mixed $locale, mixed $domain = &#039;messages&#039;): \Symfony\Component\Translation\MessageCatalogue
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$locale` | **mixed** | A locale |
| `$domain` | **mixed** | The domain |

**Return Value:**

A MessageCatalogue instance yxorP::get('REQUEST')
