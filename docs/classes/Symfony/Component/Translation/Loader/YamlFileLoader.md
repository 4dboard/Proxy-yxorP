***

# YamlFileLoader

YamlFileLoader loads translations from Yaml files.

* Full name: `\Symfony\Component\Translation\Loader\YamlFileLoader`
* Parent class: [`\Symfony\Component\Translation\Loader\FileLoader`](./FileLoader.md)

## Properties

### yamlParser

```php
private $yamlParser
```

***

## Methods

### loadResource

```php
protected loadResource(mixed $resource): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |

***

## Inherited methods

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

### loadResource

```php
protected loadResource(mixed $resource): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |

***

### flatten

Flattens an nested array of translations.

```php
private flatten(array& $messages, array $subnode = null, string $path = null): mixed
```

The scheme used is:
'key' => array('key2' => array('key3' => 'value'))
Becomes:
'key.key2.key3' => 'value'

This function takes an array by reference and will modify it

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **array** | The array that will be flattened |
| `$subnode` | **array** | Current subnode being parsed, used internally for recursive calls |
| `$path` | **string** | Current path being parsed, used internally for recursive calls |

yxorP::get('REQUEST')
