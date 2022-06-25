***

# DataUnitFormatter





* Full name: `\Zend\Filter\DataUnitFormatter`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MODE_BINARY`|public| |&#039;binary&#039;|
|`MODE_DECIMAL`|public| |&#039;decimal&#039;|
|`BASE_BINARY`|public| |1024|
|`BASE_DECIMAL`|public| |1000|

## Properties


### modes

A list of all possible filter modes:

```php
private static array $modes
```



* This property is **static**.


***

### standardizedPrefixes

A list of standardized binary prefix formats for decimal and binary mode

```php
private static array $standardizedPrefixes
```



* This property is **static**.

**See Also:**

* https://en.wikipedia.org/wiki/Binary_prefix - 

***

### options

Default options:

```php
protected array $options
```






***

## Methods


### __construct



```php
public __construct(array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### setMode

Define the mode of the filter. Possible values can be fount at self::$modes.

```php
protected setMode(string $mode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **string** |  |




***

### getMode

Get current filter mode

```php
protected getMode(): string
```











***

### isDecimalMode

Find out if the filter is in decimal mode.

```php
protected isDecimalMode(): bool
```











***

### isBinaryMode

Find out if the filter is in binary mode.

```php
protected isBinaryMode(): bool
```











***

### setUnit

Define the unit of the filter. Possible values can be fount at self::$types.

```php
protected setUnit(string $unit): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unit` | **string** |  |




***

### getUnit

Get current filter type

```php
protected getUnit(): string
```











***

### setPrecision

Set the precision of the filtered result.

```php
protected setPrecision( $precision): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$precision` | **** |  |




***

### getPrecision

Get the precision of the filtered result.

```php
protected getPrecision(): int
```











***

### setPrefixes

Set the precision of the result.

```php
protected setPrefixes(array $prefixes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefixes` | **array** |  |




***

### getPrefixes

Get the predefined prefixes or use the build-in standardized lists of prefixes.

```php
protected getPrefixes(): array
```











***

### getPrefixAt

Find the prefix at a specific location in the prefixes array.

```php
protected getPrefixAt( $index): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **** |  |




***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string|mixed
```

Returns a human readable format of the amount of bits or bytes.

If the value provided is not numeric, the value will remain unfiltered






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### formatAmount



```php
protected formatAmount( $amount, null $prefix = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amount` | **** |  |
| `$prefix` | **null** |  |




***


## Inherited methods


### hasPcreUnicodeSupport



```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### setOptions



```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```











***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isOptions



```php
protected static isOptions(mixed $options): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
