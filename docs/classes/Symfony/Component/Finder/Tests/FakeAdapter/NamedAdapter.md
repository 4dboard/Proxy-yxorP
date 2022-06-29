***

# NamedAdapter

Interface for finder engine implementations.

* Full name: `\Symfony\Component\Finder\Tests\FakeAdapter\NamedAdapter`
* Parent class: [`\Symfony\Component\Finder\Adapter\AbstractAdapter`](../../Adapter/AbstractAdapter.md)

## Properties

### name

```php
private string $name
```

***

## Methods

### __construct

```php
public __construct(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### searchInDirectory

{@inheritdoc}

```php
public searchInDirectory(mixed $dir): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |

***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

***

### canBeUsed

Returns whether the adapter is supported in the current environment.

```php
protected canBeUsed(): bool
```

**Return Value:**

Whether the adapter is supported



***

## Inherited methods

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

