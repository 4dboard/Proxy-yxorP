***

# QualifiedNameToUrlConverter

Service class used to convert Qualified names into URL paths for the Standard Router.

* Full name: `\phpDocumentor\Transformer\Router\UrlGenerator\Standard\QualifiedNameToUrlConverter`

## Methods

### fromPackage

Converts the provided FQCN into a file name by replacing all slashes and underscores with dots.

```php
public fromPackage(string $fqcn): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **string** |  |

***

### fromNamespace

Converts the provided FQCN into a file name by replacing all slashes with dots.

```php
public fromNamespace(string $fqnn): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqnn` | **string** |  |

***

### fromClass

Converts the provided FQCN into a file name by replacing all slashes with dots.

```php
public fromClass(string $fqcn): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **string** |  |

***

### fromFile

Converts the given path to a valid url.

```php
public fromFile(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### removeFileExtensionFromPath

Removes the file extension from the provided path.

```php
private removeFileExtensionFromPath(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

yxorP::get('REQUEST')
