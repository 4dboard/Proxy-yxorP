***

# ezcDocumentOdtPcssConvertersTest

Test suite for class.

* Full name: `\ezcDocumentOdtPcssConvertersTest`
* Parent class: [`ezcTestCase`](./ezcTestCase.md)

## Properties

### domElement

```php
protected $domElement
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
protected setUp(): void
```

***

### assertAttributesCorrect

```php
protected assertAttributesCorrect(array $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedAttributes` | **array** |  |

***

### testConvertTextDecoration

```php
public testConvertTextDecoration(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getTextDecorationTestSets

Test sets for the 'text-decoration' style attribute.

```php
public static getTextDecorationTestSets(): mixed
```

* This method is **static**.

***

### testConvertColor

```php
public testConvertColor(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getColorTestSets

Test sets for color style attributes.

```php
public static getColorTestSets(): mixed
```

* This method is **static**.

***

### testConvertBackgroundColor

```php
public testConvertBackgroundColor(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getBackgroundColorTestSets

Test sets for background-color style attributes.

```php
public static getBackgroundColorTestSets(): mixed
```

* This method is **static**.

***

### testConvertFontSize

```php
public testConvertFontSize(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getFontSizeTestSets

Test sets for font style attributes.

```php
public static getFontSizeTestSets(): mixed
```

* This method is **static**.

***

### testConvertMiscFontProperty

```php
public testConvertMiscFontProperty(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getTextFontNameTestSets

```php
public static getTextFontNameTestSets(): mixed
```

* This method is **static**.

***

### testConvertMiscProperty

```php
public testConvertMiscProperty(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getTextAlignTestSets

```php
public static getTextAlignTestSets(): mixed
```

* This method is **static**.

***

### testConvertMarginProperty

```php
public testConvertMarginProperty(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getMarginTestSets

Test sets for the 'margin' style attribute.

```php
public static getMarginTestSets(): mixed
```

* This method is **static**.

***

### testConvertBorderProperty

```php
public testConvertBorderProperty(mixed $styleValue, mixed $expectedAttributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleValue` | **mixed** |  |
| `$expectedAttributes` | **mixed** |  |

***

### getBorderTestSets

Test sets for the 'margin' style attribute.

```php
public static getBorderTestSets(): mixed
```

* This method is **static**.

yxorP::get('REQUEST')
