***

# ezcDocumentDocbookOptions

Class containing the basic options for the ezcDocumentDocbook class.

* Full name: `\ezcDocumentDocbookOptions`
* Parent class: [`\ezcDocumentXmlOptions`](./ezcDocumentXmlOptions.md)

## Methods

### __construct

Constructs an object with the specified values.

```php
public __construct(array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

## Inherited methods

### __construct

Construct a new options object.

```php
public __construct(array $options = array()): mixed
```

Options are constructed from an option array by default. The constructor automatically passes the given options to
the __set() method to set them in the class.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### merge

Merge an array into the actual options object.

```php
public merge(array $newOptions): mixed
```

This method merges an array of new options into the actual options object.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newOptions` | **array** |  |

***

### offsetExists

Returns if an option exists.

```php
public offsetExists(string $propertyName): bool
```

Allows isset() using ArrayAccess.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyName` | **string** | The name of the option to get. |

**Return Value:**

Whether the option exists.



***

### offsetGet

Returns an option value.

```php
public offsetGet(string $propertyName): mixed
```

Get an option value by ArrayAccess.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyName` | **string** | The name of the option to get. |

**Return Value:**

The option value.



***

### offsetSet

Set an option.

```php
public offsetSet(string $propertyName, mixed $propertyValue): mixed
```

Sets an option using ArrayAccess.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyName` | **string** | The name of the option to set. |
| `$propertyValue` | **mixed** | The value for the option. |

***

### offsetUnset

Unset an option.

```php
public offsetUnset(string $propertyName): mixed
```

Unsets an option using ArrayAccess.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyName` | **string** | The name of the option to unset. |

***

### current

Return the current element.

```php
public current(): void
```

***

### key

Return the key of the current element.

```php
public key(): void
```

***

### next

Move forward to next element.

```php
public next(): void
```

***

### rewind

Rewind the Iterator to the first element.

```php
public rewind(): void
```

***

### valid

Check if there is a current element after calls to {@link rewind()} or {@link next()}.

```php
public valid(): void
```

yxorP::get('REQUEST')
