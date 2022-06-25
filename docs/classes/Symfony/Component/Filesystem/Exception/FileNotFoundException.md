***

# FileNotFoundException

Exception class thrown when a file couldn't be found.

* Full name: `\Symfony\Component\Filesystem\Exception\FileNotFoundException`
* Parent class: [`\Symfony\Component\Filesystem\Exception\IOException`](./IOException.md)

## Methods

### __construct

```php
public __construct(mixed $message = null, mixed $code, \Exception $previous = null, mixed $path = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$code` | **mixed** |  |
| `$previous` | **\Exception** |  |
| `$path` | **mixed** |  |

***

## Inherited methods

### __construct

```php
public __construct(mixed $message, mixed $code, \Exception $previous = null, mixed $path = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$code` | **mixed** |  |
| `$previous` | **\Exception** |  |
| `$path` | **mixed** |  |

***

### getPath

Returns the associated path for the exception.

```php
public getPath(): string
```

**Return Value:**

The path yxorP::get('REQUEST')
