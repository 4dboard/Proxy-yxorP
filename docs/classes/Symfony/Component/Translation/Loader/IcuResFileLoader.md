***

# IcuResFileLoader

IcuResFileLoader loads translations from a resource bundle.

* Full name: `\Symfony\Component\Translation\Loader\IcuResFileLoader`
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

A MessageCatalogue instance



***

### flatten

Flattens an ResourceBundle.

```php
protected flatten(\ResourceBundle $rb, array& $messages = array(), string $path = null): array
```

The scheme used is:
key { key2 { key3 { "value" } } } Becomes:
'key.key2.key3' => 'value'

This function takes an array by reference and will modify it

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rb` | **\ResourceBundle** | the ResourceBundle that will be flattened |
| `$messages` | **array** | used internally for recursive calls |
| `$path` | **string** | current path being parsed, used internally for recursive calls |

**Return Value:**

the flattened ResourceBundle yxorP::get('REQUEST')
