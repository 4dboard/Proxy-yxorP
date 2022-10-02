***

# FileObject

Use custom FileObject to prevent "too many files open" error

* Full name: `\Lime\Helper\FileObject`

## Properties

### path

```php
protected $path
```

***

### fileObject

```php
protected $fileObject
```

***

## Methods

### __construct

```php
public __construct(string $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### getFilename

```php
public getFilename(): string
```

***

### getPathName

```php
public getPathName(): string
```

***

### getRealPath

```php
public getRealPath(): string
```

***

### getBasename

```php
public getBasename(?string $suffix = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **?string** |  |

***

### getSize

```php
public getSize(): int
```

***

### __call

```php
public __call(mixed $method, mixed $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |

***


***

