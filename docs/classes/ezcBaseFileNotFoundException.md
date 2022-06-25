***

# ezcBaseFileNotFoundException

ezcBaseFileNotFoundException is thrown when a file or directory was tried to be opened, but did not exist.

* Full name: `\ezcBaseFileNotFoundException`
* Parent class: [`\ezcBaseFileException`](./ezcBaseFileException.md)

## Methods

### __construct

Constructs a new ezcBaseFileNotFoundException.

```php
public __construct(string $path, string $type = null, string $message = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The name of the file. |
| `$type` | **string** | The type of the file. |
| `$message` | **string** | A string with extra information. |

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
