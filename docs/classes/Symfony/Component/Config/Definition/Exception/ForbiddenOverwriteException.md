***

# ForbiddenOverwriteException

This exception is thrown when a configuration path is overwritten from a subsequent configuration file, but the entry
node specifically forbids this.

* Full name: `\Symfony\Component\Config\Definition\Exception\ForbiddenOverwriteException`
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
