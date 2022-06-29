***

# AbstractAdapter

Interface for finder engine implementations.

* Full name: `\Symfony\Component\Finder\Adapter\AbstractAdapter`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Symfony\Component\Finder\Adapter\AdapterInterface`](./AdapterInterface.md)
* This class is an **Abstract class**

## Properties

### followLinks

```php
protected $followLinks
```

***

### mode

```php
protected $mode
```

***

### minDepth

```php
protected $minDepth
```

***

### maxDepth

```php
protected $maxDepth
```

***

### exclude

```php
protected $exclude
```

***

### names

```php
protected $names
```

***

### notNames

```php
protected $notNames
```

***

### contains

```php
protected $contains
```

***

### notContains

```php
protected $notContains
```

***

### sizes

```php
protected $sizes
```

***

### dates

```php
protected $dates
```

***

### filters

```php
protected $filters
```

***

### sort

```php
protected $sort
```

***

### paths

```php
protected $paths
```

***

### notPaths

```php
protected $notPaths
```

***

### ignoreUnreadableDirs

```php
protected $ignoreUnreadableDirs
```

***

### areSupported

```php
private static $areSupported
```

* This property is **static**.

***

## Methods

### isSupported

Tests adapter support for current platform.

```php
public isSupported(): bool
```

***

### setFollowLinks

```php
public setFollowLinks(mixed $followLinks): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$followLinks` | **mixed** |  |

***

### setMode

```php
public setMode(mixed $mode): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **mixed** |  |

***

### setDepths

```php
public setDepths(array $depths): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$depths` | **array** |  |

***

### setExclude

```php
public setExclude(array $exclude): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exclude` | **array** |  |

***

### setNames

```php
public setNames(array $names): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **array** |  |

***

### setNotNames

```php
public setNotNames(array $notNames): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notNames` | **array** |  |

***

### setContains

```php
public setContains(array $contains): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contains` | **array** |  |

***

### setNotContains

```php
public setNotContains(array $notContains): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notContains` | **array** |  |

***

### setSizes

```php
public setSizes(array $sizes): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sizes` | **array** |  |

***

### setDates

```php
public setDates(array $dates): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dates` | **array** |  |

***

### setFilters

```php
public setFilters(array $filters): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array** |  |

***

### setSort

```php
public setSort(mixed $sort): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sort` | **mixed** |  |

***

### setPath

```php
public setPath(array $paths): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** |  |

***

### setNotPath

```php
public setNotPath(array $notPaths): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notPaths` | **array** |  |

***

### ignoreUnreadableDirs

```php
public ignoreUnreadableDirs(mixed $ignore = true): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignore` | **mixed** |  |

***

### canBeUsed

Returns whether the adapter is supported in the current environment.

```php
protected canBeUsed(): bool
```

This method should be implemented in all adapters. Do not implement isSupported in the adapters as the generic
implementation provides a cache layer.

* This method is **abstract**.

**Return Value:**

Whether the adapter is supported

**See Also:**

* \Symfony\Component\Finder\Adapter\isSupported() -

***


***

