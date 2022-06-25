***

# ezcBaseExtensionNotFoundException

ezcBaseExtensionNotFoundException is thrown when a requested PHP extension was not found.

* Full name: `\ezcBaseExtensionNotFoundException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)

## Methods

### __construct

Constructs a new ezcBaseExtensionNotFoundException.

```php
public __construct(string $name, string $version = null, string $message = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the extension |
| `$version` | **string** | The version of the extension |
| `$message` | **string** | Additional text |

***

## Inherited methods

### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

yxorP::get('REQUEST')
