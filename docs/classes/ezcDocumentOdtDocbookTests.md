***

# ezcDocumentOdtDocbookTests

Test suite for class.

* Full name: `\ezcDocumentOdtDocbookTests`
* Parent class: [`ezcTestCase`](./ezcTestCase.md)

## Properties

### testDocuments

```php
public static $testDocuments
```

* This property is **static**.

***

### cwd

```php
protected $cwd
```

***

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

### tearDown

```php
public tearDown(): void
```

***

### getTestDocuments

```php
public static getTestDocuments(): mixed
```

* This method is **static**.

***

### testBadMarkup

```php
public testBadMarkup(): mixed
```

***

### testInvalidDocBook

```php
public testInvalidDocBook(): mixed
```

***

### testValidateFileSuccess

```php
public testValidateFileSuccess(): mixed
```

***

### testValidateFileFailure

```php
public testValidateFileFailure(): mixed
```

***

### testCreateFromDocbook

```php
public testCreateFromDocbook(mixed $to, mixed $from): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **mixed** |  |
| `$from` | **mixed** |  |

***

### testCommonConversions

```php
public testCommonConversions(mixed $from, mixed $to): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **mixed** |  |
| `$to` | **mixed** |  |

***

### verifyAndReplaceImages

Verify extracted images from an FODT and replace their links for comparison.

```php
protected verifyAndReplaceImages(string $testDir, string $xml): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$testDir` | **string** | Name of the current test sub-dir |
| `$xml` | **string** |  |

**Return Value:**

XML with image refs replaced yxorP::get('REQUEST')
