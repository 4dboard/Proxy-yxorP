***

# FileLoaderImportCircularReferenceException

Exception class for when a circular reference is detected when importing resources.

* Full name: `\Symfony\Component\Config\Exception\FileLoaderImportCircularReferenceException`
* Parent class: [`\Symfony\Component\Config\Exception\FileLoaderLoadException`](./FileLoaderLoadException.md)

## Methods

### __construct

```php
public __construct(array $resources, mixed $code = null, mixed $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resources` | **array** |  |
| `$code` | **mixed** | The error code |
| `$previous` | **mixed** | A previous exception |

***

## Inherited methods

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
