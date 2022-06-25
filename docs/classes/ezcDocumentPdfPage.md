***

# ezcDocumentPdfPage

PDF page class

Class containing context information about a single rendered page.

It especially encodes information about already covered / blocked areas on one PDF page, and offers methods to check if
a new content block fits on the page an, where it does fit on the page.

The testing for new boxes, where they fit on the page and in which dimensions they fit, is implemented in the
testFitRectangle() method. The method implementation is optimized for speed, since it is called *a lot*
during the rendering process.

* Full name: `\ezcDocumentPdfPage`
* This class implements:
  [`\ezcDocumentLocateable`](./ezcDocumentLocateable.md)

## Properties

### covered

Already covered areas, given as an arrays of ezcDocumentPdfBoundingBox objects.

```php
protected array $covered
```

***

### transaction

Current transaction

```php
protected mixed $transaction
```

***

### storedPositions

Stored drawing positions for each transaction.

```php
protected array $storedPositions
```

***

### pageNumber

Page number

```php
protected int $pageNumber
```

***

### x

Current horizontal rendering position on page

```php
public float $x
```

***

### y

Current vertical rendering position on page

```php
public float $y
```

***

### xOffset

Horizontal offset in a column

```php
public float $xOffset
```

***

### xReduce

Horizontal width reduction in a column

```php
public float $xReduce
```

***

### startX

X coordinate of rendering start position

```php
public float $startX
```

***

### startY

Y coordinate of rendering start position

```php
public float $startY
```

***

### width

Width of current page - given in millimeters

```php
protected float $width
```

***

### height

Height of current page - given in millimeters

```php
protected float $height
```

***

### innerWidth

Inner width of current page - given in millimeters

```php
protected float $innerWidth
```

***

### innerHeight

Inner height of current page - given in millimeters

```php
protected float $innerHeight
```

***

### orderedId

ID of the page.

```php
protected int $orderedId
```

This ID defines an order on the pages. It is *not* sequential, there might always be holes in the sequence.

But a page creted later in the rendering process will always have a higher number then the pages before.




***

### idCounter

Global static ID provider to dertermine page creation order. This is required for the $orderedId property.

```php
protected static int $idCounter
```

* This property is **static**.

***

### pageSizes

Array of pages sizes

```php
protected static array $pageSizes
```

Associates known page size identifiers the actual size in millimeters.

* This property is **static**.

***

## Methods

### __construct

Construct new fresh page from its dimensions

```php
public __construct(int $pageNumber, float $width, float $height, mixed $innerWidth = null, mixed $innerHeight = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageNumber` | **int** |  |
| `$width` | **float** |  |
| `$height` | **float** |  |
| `$innerWidth` | **mixed** |  |
| `$innerHeight` | **mixed** |  |

***

### createFromSpecification

Create from user readable soze specification

```php
public static createFromSpecification(int $pageNumber, mixed $size, mixed $orientation, array $margin, array $padding): \ezcDocumentPdfPage
```

Create page from common page size abbreviations, like "A4" and page orientation.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pageNumber` | **int** |  |
| `$size` | **mixed** |  |
| `$orientation` | **mixed** |  |
| `$margin` | **array** |  |
| `$padding` | **array** |  |

***

### __get

Wrapper for virtual property access

```php
public __get(string $property): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |

***

### startTransaction

Start a new transaction sequence

```php
public startTransaction(mixed $transaction): mixed
```

Start a new transaction, which will group all covered areas, until the next transaction is started. This methods takes
and returns an identifier for this transaction, which can be used to commit this transaction, or revert everything
since (including) this this transaction.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transaction` | **mixed** |  |

***

### revert

Revert transaction

```php
public revert(mixed $transaction): void
```

Revert all transactions after the specified (including the specified)
transaction.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transaction` | **mixed** |  |

***

### setCovered

Set space covered

```php
public setCovered(\ezcDocumentPdfBoundingBox $rectangle, mixed $id = null): array
```

Append a rectangle of already covered space. This space will then not be reused for any other objects on the page.

There is no check for overlapping of covered areas in here, so that you can add bounding boxes wrapping multiple already
existing rectangles.

Returns an array specifying the transaction and ID of the cover action. This tupel may be used later to call the
uncover() method, to remove this coverage area again.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rectangle` | **\ezcDocumentPdfBoundingBox** |  |
| `$id` | **mixed** |  |

***

### uncover

Uncover area

```php
public uncover(array $id): bool
```

Uncover the area specified by the ID returned by the setCovered()
method.

Will return false, if the given ID is unknown in the transaction.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **array** |  |

***

### testFitRectangle

Try to fit specified rectangle on page

```php
public testFitRectangle(mixed $xPos = null, mixed $yPos = null, mixed $width = null, mixed $height = null): mixed
```

Try to find place for the specified rectangle on the curernt page. Each of the parameters may be set to null, which
means that this parameter can be varied in dimension or value.

If all parameters are set to a fixed value, either false will be returned, if the location is already (partly) covered,
or a rectangle will be returned if that space is still available.

If, for example, the yPos parameter is set to null, but all other parameters are set, the box will be moved down the
page, until a available location could be found.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xPos` | **mixed** |  |
| `$yPos` | **mixed** |  |
| `$width` | **mixed** |  |
| `$height` | **mixed** |  |

***

### getLocationId

Get elements location ID

```php
public getLocationId(): string
```

Return the elements location ID, based on the factors described in the class header.

yxorP::get('REQUEST')
