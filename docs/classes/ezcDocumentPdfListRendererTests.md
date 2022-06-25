***

# ezcDocumentPdfListRendererTests

Test suite for class.

* Full name: `\ezcDocumentPdfListRendererTests`
* Parent class: [`\ezcDocumentPdfTestCase`](./ezcDocumentPdfTestCase.md)

## Methods

### suite

```php
public static suite(): mixed
```

* This method is **static**.

***

### setUp

```php
public setUp(): void
```

***

### testRenderItemizedList

```php
public testRenderItemizedList(): mixed
```

***

### testRenderOrderedList

```php
public testRenderOrderedList(): mixed
```

***

### testRenderStackedLists

```php
public testRenderStackedLists(): mixed
```

***

### getOrderedListTypes

```php
public static getOrderedListTypes(): mixed
```

* This method is **static**.

***

### testRenderOrderedListTypes

```php
public testRenderOrderedListTypes(mixed $type, array $items): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$items` | **array** |  |

***

### getItemizedListTypes

```php
public static getItemizedListTypes(): mixed
```

* This method is **static**.

***

### testRenderItemizedListTypes

```php
public testRenderItemizedListTypes(mixed $type, array $items): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$items` | **array** |  |

***

## Inherited methods

### setUp

```php
protected setUp(): void
```

***

### tearDown

```php
protected tearDown(): void
```

***

### assertPdfDocumentsSimilar

Assert that the given PDF document content is simlar to the PDF document referenced by its test case name.

```php
protected assertPdfDocumentsSimilar(string $content, string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$name` | **string** |  |

***

### renderFullDocument

Test rendering of a full document

```php
protected renderFullDocument(string $file, string $fileName, array $styles = array()): void
```

Test the rendering of a given full document with an additional set of user configured styles.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$fileName` | **string** |  |
| `$styles` | **array** |  |

yxorP::get('REQUEST')
