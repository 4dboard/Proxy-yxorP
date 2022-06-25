***

# CSS

* Full name: `\yxorP\Build\CSS`
* Parent class: [`\yxorP\Build\Minify`](./Minify.md)

## Properties

### maxImportSize

```php
protected $maxImportSize
```

***

### importExtensions

```php
protected $importExtensions
```

***

## Methods

### setMaxImportSize

```php
public setMaxImportSize(mixed $size): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **mixed** |  |

***

### setImportExtensions

```php
public setImportExtensions(array $extensions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensions` | **array** |  |

***

### moveImportsToTop

```php
protected moveImportsToTop(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### combineImports

```php
protected combineImports(mixed $source, mixed $content, mixed $parents): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** |  |
| `$content` | **mixed** |  |
| `$parents` | **mixed** |  |

***

### importFiles

```php
protected importFiles(mixed $source, mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** |  |
| `$content` | **mixed** |  |

***

### execute

```php
public execute(mixed $path = null, mixed $parents = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$parents` | **mixed** |  |

***

### move

```php
protected move(\MatthiasMullie\PathConverter\ConverterInterface $converter, mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\MatthiasMullie\PathConverter\ConverterInterface** |  |
| `$content` | **mixed** |  |

***

### shortenColors

```php
protected shortenColors(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### shortenFontWeights

```php
protected shortenFontWeights(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### shortenZeroes

```php
protected shortenZeroes(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### stripEmptyTags

```php
protected stripEmptyTags(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### stripComments

```php
protected stripComments(): mixed
```

***

### stripWhitespace

```php
protected stripWhitespace(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### extractMath

```php
protected extractMath(): mixed
```

***

### extractCustomProperties

```php
protected extractCustomProperties(): mixed
```

***

### canImportBySize

```php
protected canImportBySize(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### canImportByPath

```php
protected canImportByPath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getPathConverter

```php
protected getPathConverter(mixed $source, mixed $target): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** |  |
| `$target` | **mixed** |  |

***

## Inherited methods

### __construct

```php
public __construct(): mixed
```

***

### add

```php
public add(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### addFile

```php
public addFile(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### minify

```php
public minify(mixed $path = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### gzip

```php
public gzip(mixed $path = null, mixed $level = 9): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$level` | **mixed** |  |

***

### cache

```php
public cache(\Psr\Cache\CacheItemInterface $item): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\Psr\Cache\CacheItemInterface** |  |

***

### execute

```php
public execute(mixed $path = null): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### load

```php
protected load(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### save

```php
protected save(mixed $content, mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$path` | **mixed** |  |

***

### registerPattern

```php
protected registerPattern(mixed $pattern, mixed $replacement = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **mixed** |  |
| `$replacement` | **mixed** |  |

***

### replace

```php
protected replace(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### executeReplacement

```php
protected executeReplacement(mixed $replacement, mixed $match): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **mixed** |  |
| `$match` | **mixed** |  |

***

### extractStrings

```php
protected extractStrings(mixed $chars = &#039;&#039;&quot;&#039;, mixed $placeholderPrefix = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **mixed** |  |
| `$placeholderPrefix` | **mixed** |  |

***

### restoreExtractedData

```php
protected restoreExtractedData(mixed $content): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |

***

### canImportFile

```php
protected canImportFile(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### openFileForWriting

```php
protected openFileForWriting(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### writeToFile

```php
protected writeToFile(mixed $handler, mixed $content, mixed $path = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **mixed** |  |
| `$content` | **mixed** |  |
| `$path` | **mixed** |  |

yxorP::get('REQUEST')
