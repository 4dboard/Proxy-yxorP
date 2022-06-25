***

# ezcBaseFileIoException

ezcBaseFileIoException is thrown when a problem occurs while writing and reading to/from an open file.

* Full name: `\ezcBaseFileIoException`
* Parent class: [`\ezcBaseFileException`](./ezcBaseFileException.md)

## Methods

### __construct

Constructs a new ezcBaseFileIoException for the file $path.

```php
public __construct(string $path, int $mode, string $message = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The name of the file. |
| `$mode` | **
int** | The mode of the property that is allowed<br />(ezcBaseFileException::READ, ezcBaseFileException::WRITE,<br />ezcBaseFileException::EXECUTE or<br />ezcBaseFileException::CHANGE). |
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
