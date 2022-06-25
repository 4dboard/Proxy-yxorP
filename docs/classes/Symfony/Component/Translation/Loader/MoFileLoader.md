***

# MoFileLoader

ArrayLoader loads translations from a PHP array.

* Full name: `\Symfony\Component\Translation\Loader\MoFileLoader`
* Parent class: [`\Symfony\Component\Translation\Loader\FileLoader`](./FileLoader.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MO_LITTLE_ENDIAN_MAGIC`|public|float|0x950412de|
|`MO_BIG_ENDIAN_MAGIC`|public|float|0xde120495|
|`MO_HEADER_SIZE`|public|int|28|

## Methods

### loadResource

Parses machine object (MO) format, independent of the machine's endian it was created on. Both 32bit and 64bit systems
are supported.

```php
protected loadResource(mixed $resource): mixed
```

{@inheritdoc}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |

***

### readLong

Reads an unsigned long from stream respecting endianess.

```php
private readLong(resource $stream, bool $isBigEndian): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** |  |
| `$isBigEndian` | **bool** |  |

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
