***

# DataCollection

This file is part of the Cockpit project.

(c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

* Full name: `\DataCollection`
* This class implements:
[`\Iterator`](./Iterator.md)



## Properties


### position



```php
protected $position
```






***

### items



```php
protected $items
```






***

## Methods


### create



```php
public static create( $items): \DataCollection
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




***

### __construct



```php
public __construct( $items): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




***

### count



```php
public count(): int
```











***

### first



```php
public first(): null
```











***

### last



```php
public last(): null
```











***

### reverse



```php
public reverse(): \DataCollection
```











***

### limit



```php
public limit( $number): \DataCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **** |  |




***

### skip



```php
public skip( $number): \DataCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **** |  |




***

### not



```php
public not( $criteria): \DataCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **** |  |




***

### filter



```php
public filter( $criteria): \DataCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **** |  |




***

### sort



```php
public sort( $expr, int $dir = 1): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **** |  |
| `$dir` | **int** |  |




***

### index



```php
public index( $obj): bool|int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **** |  |




***

### eq



```php
public eq( $index): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **** |  |




***

### setItems



```php
protected setItems( $items): \DataCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **** |  |




***

### pagination



```php
public pagination( $limit = 5,  $current = 1): \Pagination
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **** |  |
| `$current` | **** |  |




***

### toArray



```php
public toArray(): array
```











***

### rewind

Iterator implementation

```php
public rewind(): mixed
```











***

### current



```php
public current(): mixed
```











***

### key



```php
public key(): mixed
```











***

### next



```php
public next(): mixed
```











***

### valid



```php
public valid(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
