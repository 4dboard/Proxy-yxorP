***

# DataCollection





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


### __construct



```php
public __construct(mixed $items): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **mixed** |  |




***

### create



```php
public static create(mixed $items): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **mixed** |  |




***

### first



```php
public first(): mixed
```











***

### last



```php
public last(): mixed
```











***

### reverse



```php
public reverse(): mixed
```











***

### limit



```php
public limit(mixed $number): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### skip



```php
public skip(mixed $number): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### not



```php
public not(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### filter



```php
public filter(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### sort



```php
public sort(mixed $expr, mixed $dir = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |
| `$dir` | **mixed** |  |




***

### index



```php
public index(mixed $obj): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |




***

### eq



```php
public eq(mixed $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |




***

### pagination



```php
public pagination(mixed $limit = 5, mixed $current = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |
| `$current` | **mixed** |  |




***

### count



```php
public count(): mixed
```











***

### toArray



```php
public toArray(): mixed
```











***

### rewind



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

### setItems



```php
protected setItems(mixed $items): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
