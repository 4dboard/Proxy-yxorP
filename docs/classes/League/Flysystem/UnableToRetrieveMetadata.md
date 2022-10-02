***

# UnableToRetrieveMetadata

* Full name: `\League\Flysystem\UnableToRetrieveMetadata`
* Parent class: [`RuntimeException`](../../RuntimeException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\League\Flysystem\FilesystemOperationFailed`](./FilesystemOperationFailed.md)
* This class is a **Final class**

## Properties

### location

```php
private string $location
```

***

### metadataType

```php
private string $metadataType
```

***

### reason

```php
private string $reason
```

***

## Methods

### lastModified

```php
public static lastModified(string $location, string $reason = &#039;&#039;, \Throwable $previous = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |

***

### visibility

```php
public static visibility(string $location, string $reason = &#039;&#039;, \Throwable $previous = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |

***

### fileSize

```php
public static fileSize(string $location, string $reason = &#039;&#039;, \Throwable $previous = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |

***

### mimeType

```php
public static mimeType(string $location, string $reason = &#039;&#039;, \Throwable $previous = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |

***

### create

```php
public static create(string $location, string $type, string $reason = &#039;&#039;, \Throwable $previous = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$type` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |

***

### reason

```php
public reason(): string
```

***

### location

```php
public location(): string
```

***

### metadataType

```php
public metadataType(): string
```

***

### operation

```php
public operation(): string
```

***


***

