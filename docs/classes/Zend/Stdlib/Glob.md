***

# Glob

Wrapper for glob with fallback if GLOB_BRACE is not available.

* Full name: `\Zend\Stdlib\Glob`
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`GLOB_MARK`|public| |0x1|
|`GLOB_NOSORT`|public| |0x2|
|`GLOB_NOCHECK`|public| |0x4|
|`GLOB_NOESCAPE`|public| |0x8|
|`GLOB_BRACE`|public| |0x10|
|`GLOB_ONLYDIR`|public| |0x20|
|`GLOB_ERR`|public| |0x40|

## Methods

### glob

Find pathnames matching a pattern.

```php
public static glob(string $pattern, int $flags, bool $forceFallback = false): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |
| `$flags` | **int** |  |
| `$forceFallback` | **bool** |  |

**See Also:**

* http://docs.php.net/glob -

***

### systemGlob

Use the glob function provided by the system.

```php
protected static systemGlob(string $pattern, int $flags): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |
| `$flags` | **int** |  |

***

### fallbackGlob

Expand braces manually, then use the system glob.

```php
protected static fallbackGlob(string $pattern, int $flags): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |
| `$flags` | **int** |  |

***

### nextBraceSub

Find the end of the sub-pattern in a brace expression.

```php
protected static nextBraceSub(string $pattern, int $begin, int $flags): int|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |
| `$begin` | **int** |  |
| `$flags` | **int** |  |

yxorP::get('REQUEST')
