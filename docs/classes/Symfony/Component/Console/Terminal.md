***

# Terminal

* Full name: `\Symfony\Component\Console\Terminal`

## Properties

### width

```php
private static $width
```

* This property is **static**.

***

### height

```php
private static $height
```

* This property is **static**.

***

### stty

```php
private static $stty
```

* This property is **static**.

***

## Methods

### getWidth

Gets the terminal width.

```php
public getWidth(): int
```

***

### getHeight

Gets the terminal height.

```php
public getHeight(): int
```

***

### initDimensions

```php
private static initDimensions(): mixed
```

* This method is **static**.

***

### hasVt100Support

Returns whether STDOUT has vt100 support (some Windows 10+ configurations).

```php
private static hasVt100Support(): bool
```

* This method is **static**.

***

### initDimensionsUsingStty

Initializes dimensions using the output of an stty columns line.

```php
private static initDimensionsUsingStty(): mixed
```

* This method is **static**.

***

### getConsoleMode

Runs and parses mode CON if it's available, suppressing any error output.

```php
private static getConsoleMode(): int[]|null
```

* This method is **static**.

**Return Value:**

An array composed of the width and the height or null if it could not be parsed



***

### getSttyColumns

Runs and parses stty -a if it's available, suppressing any error output.

```php
private static getSttyColumns(): ?string
```

* This method is **static**.

***

### readFromProcess

```php
private static readFromProcess(string $command): ?string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **string** |  |

***


***

