***

# TableCell





* Full name: `\Symfony\Component\Console\Helper\TableCell`



## Properties


### value



```php
private $value
```






***

### options



```php
private $options
```






***

## Methods


### __construct



```php
public __construct(string $value = &#039;&#039;, array $options = array()): mixed
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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
