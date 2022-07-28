***

# TableSeparator

Marks a row as being a separator.



* Full name: `\Symfony\Component\Console\Helper\TableSeparator`
* Parent class: [`\Symfony\Component\Console\Helper\TableCell`](./TableCell.md)




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


## Inherited methods


### __construct



```php
public __construct(string $value = &#039;&#039;, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$options` | **array** |  |




***

### __toString

Returns the cell value.

```php
public __toString(): string
```











***

### getColspan

Gets number of colspan.

```php
public getColspan(): int
```











***

### getRowspan

Gets number of rowspan.

```php
public getRowspan(): int
```











***

### getStyle



```php
public getStyle(): ?\Symfony\Component\Console\Helper\TableCellStyle
```











***


***

