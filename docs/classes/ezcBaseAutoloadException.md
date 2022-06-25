***

# ezcBaseAutoloadException

ezcBaseAutoloadException is thrown whenever a class can not be found with the autoload mechanism.

* Full name: `\ezcBaseAutoloadException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)

## Methods

### __construct

Constructs a new ezcBaseAutoloadException for the $className that was searched for in the autoload files $fileNames from
the directories specified in $dirs.

```php
public __construct(string $className, array|(string) $files, array|(\ezcBaseRepositoryDirectory) $dirs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |
| `$files` | **array&#124;(string)** |  |
| `$dirs` | **array&#124;(\ezcBaseRepositoryDirectory)** |  |

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
