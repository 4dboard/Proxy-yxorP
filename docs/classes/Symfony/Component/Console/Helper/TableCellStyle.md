***

# TableCellStyle

* Full name: `\Symfony\Component\Console\Helper\TableCellStyle`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_ALIGN`|public| |&#039;left&#039;|
|`TAG_OPTIONS`|private| |[&#039;fg&#039;, &#039;bg&#039;, &#039;options&#039;]|
|`ALIGN_MAP`|private| |[&#039;left&#039; =&gt; \STR_PAD_RIGHT, &#039;center&#039; =&gt; \STR_PAD_BOTH, &#039;right&#039; =&gt; \STR_PAD_LEFT]|

## Properties

### options

```php
private $options
```

***

## Methods

### __construct

```php
public __construct(array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### getOptions

```php
public getOptions(): array
```

***

### getTagOptions

Gets options we need for tag for example fg, bg.

```php
public getTagOptions(): string[]
```

***

### getPadByAlign

```php
public getPadByAlign(): int
```

***

### getCellFormat

```php
public getCellFormat(): ?string
```

***


***

