***

# CsvFileLoader

CsvFileLoader loads translations from CSV files.

* Full name: `\Symfony\Component\Translation\Loader\CsvFileLoader`
* Parent class: [`\Symfony\Component\Translation\Loader\FileLoader`](./FileLoader.md)

## Properties

### delimiter

```php
private $delimiter
```

***

### enclosure

```php
private $enclosure
```

***

### escape

```php
private $escape
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

### setCsvControl

Sets the delimiter, enclosure, and escape character for CSV.

```php
public setCsvControl(string $delimiter = &#039;;&#039;, string $enclosure = &#039;&quot;&#039;, string $escape = &#039;\&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** | delimiter character |
| `$enclosure` | **string** | enclosure character |
| `$escape` | **string** | escape character |

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
