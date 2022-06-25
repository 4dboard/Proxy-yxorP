***

# CaptureCache

* Full name: `\Zend\Cache\Pattern\CaptureCache`
* Parent class: [`\Zend\Cache\Pattern\AbstractPattern`](./AbstractPattern.md)

## Methods

### start

Start the cache

```php
public start(string $pageId = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **string** | Page identifier |

***

### set

Write content to page identity

```php
public set(string $content, null|string $pageId = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$pageId` | **null&#124;string** |  |

***

### get

Get from cache

```php
public get(null|string $pageId = null): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **null&#124;string** |  |

***

### has

Checks if a cache with given id exists

```php
public has(null|string $pageId = null): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **null&#124;string** |  |

***

### remove

Remove from cache

```php
public remove(null|string $pageId = null): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **null&#124;string** |  |

***

### clearByGlob

Clear cached pages matching glob pattern

```php
public clearByGlob(string $pattern = &#039;**&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |

***

### detectPageId

Determine the page to save from the request

```php
protected detectPageId(): string
```

***

### pageId2Filename

Get filename for page id

```php
protected pageId2Filename(string $pageId): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **string** |  |

***

### pageId2Path

Get path for page id

```php
protected pageId2Path(string $pageId): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **string** |  |

***

### putFileContent

Write content to a file

```php
protected putFileContent(string $file, string $data): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | File complete path |
| `$data` | **string** | Data to write |

***

### createDirectoryStructure

Creates directory if not already done.

```php
protected createDirectoryStructure(string $pathname): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pathname` | **string** |  |

***

### getFilename

Returns the generated file name.

```php
public getFilename(null|string $pageId = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageId` | **null&#124;string** |  |

***

## Inherited methods

### setOptions

Set pattern options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\AbstractPattern
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |

***

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Pattern\PatternOptions
```

yxorP::get('REQUEST')
