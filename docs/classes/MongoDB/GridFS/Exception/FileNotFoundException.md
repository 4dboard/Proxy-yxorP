***

# FileNotFoundException

* Full name: `\MongoDB\GridFS\Exception\FileNotFoundException`
* Parent class: [`\MongoDB\Exception\RuntimeException`](../../Exception/RuntimeException.md)

## Methods

### byFilenameAndRevision

Thrown when a file cannot be found by its filename and revision.

```php
public static byFilenameAndRevision(string $filename, int $revision, string $namespace): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | Filename |
| `$revision` | **int** | Revision |
| `$namespace` | **string** | Namespace for the files collection |

***

### byId

Thrown when a file cannot be found by its ID.

```php
public static byId(mixed $id, string $namespace): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | File ID |
| `$namespace` | **string** | Namespace for the files collection |

yxorP::get('REQUEST')
