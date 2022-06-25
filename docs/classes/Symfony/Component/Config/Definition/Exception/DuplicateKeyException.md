***

# DuplicateKeyException

This exception is thrown whenever the key of an array is not unique. This can only be the case if the configuration is
coming from an XML file.

* Full name: `\Symfony\Component\Config\Definition\Exception\DuplicateKeyException`
* Parent
  class: [`\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException`](./InvalidConfigurationException.md)

## Inherited methods

### setPath

```php
public setPath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getPath

```php
public getPath(): mixed
```

***

### addHint

Adds extra information that is suffixed to the original exception message.

```php
public addHint(string $hint): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hint` | **string** |  |

yxorP::get('REQUEST')
