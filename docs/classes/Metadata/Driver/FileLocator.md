***

# FileLocator

* Full name: `\Metadata\Driver\FileLocator`
* This class implements:
  [`\Metadata\Driver\AdvancedFileLocatorInterface`](./AdvancedFileLocatorInterface.md)

## Properties

### dirs

```php
private $dirs
```

***

## Methods

### __construct

```php
public __construct(array $dirs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **array** |  |

***

### getDirs

```php
public getDirs(): mixed
```

***

### findFileForClass

```php
public findFileForClass(\ReflectionClass $class, string $extension): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |
| `$extension` | **string** |  |

***

### findAllClasses

Finds all possible metadata files.

```php
public findAllClasses(mixed $extension): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **mixed** |  |

yxorP::get('REQUEST')
