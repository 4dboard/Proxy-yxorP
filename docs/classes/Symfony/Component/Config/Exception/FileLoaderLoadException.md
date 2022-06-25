***

# FileLoaderLoadException

Exception class for when a resource cannot be loaded or imported.

* Full name: `\Symfony\Component\Config\Exception\FileLoaderLoadException`
* Parent class: [`Exception`](../../../../Exception.md)

## Methods

### __construct

```php
public __construct(string $resource, string $sourceResource = null, int $code = null, \Exception $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **string** | The resource that could not be imported |
| `$sourceResource` | **string** | The original resource importing the new resource |
| `$code` | **int** | The error code |
| `$previous` | **\Exception** | A previous exception |

***

### varToString

```php
protected varToString(mixed $var): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |

yxorP::get('REQUEST')
