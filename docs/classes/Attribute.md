***

# Attribute

* Full name: `\Attribute`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TARGET_CLASS`|public| |1|
|`TARGET_FUNCTION`|public| |2|
|`TARGET_METHOD`|public| |4|
|`TARGET_PROPERTY`|public| |8|
|`TARGET_CLASS_CONSTANT`|public| |16|
|`TARGET_PARAMETER`|public| |32|
|`TARGET_ALL`|public| |63|
|`IS_REPEATABLE`|public| |64|

## Properties

### flags

```php
public int $flags
```

***

## Methods

### __construct

```php
public __construct(int $flags = self::TARGET_ALL): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flags` | **int** |  |

yxorP::get('REQUEST')
