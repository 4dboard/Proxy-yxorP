***

# ezcBasePropertyPermissionException

ezcBasePropertyPermissionException is thrown whenever a read-only property is tried to be changed, or when a write-only
property was accessed for reading.

* Full name: `\ezcBasePropertyPermissionException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`READ`|public| |1|
|`WRITE`|public| |2|

## Methods

### __construct

Constructs a new ezcPropertyPermissionException for the property $name.

```php
public __construct(string $name, int $mode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the property. |
| `$mode` | **int** | The mode of the property that is allowed (::READ or ::WRITE). |

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
