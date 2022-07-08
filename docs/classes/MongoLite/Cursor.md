***

# Cursor

Cursor object.



* Full name: `\MongoLite\Cursor`
* This class implements:
[`\Iterator`](../Iterator.md)



## Properties


### position



```php
protected bool|int $position
```






***

### data



```php
protected array $data
```






***

### collection



```php
protected \MongoLite\Collection $collection
```






***

### criteria



```php
protected string|null $criteria
```






***

### projection



```php
protected array|null $projection
```






***

### limit



```php
protected null|int $limit
```






***

### skip



```php
protected null|int $skip
```






***

### sort



```php
protected null|array $sort
```






***

## Methods


### __construct

Constructor

```php
public __construct(object $collection, mixed $criteria, mixed $projection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **object** |  |
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |




***

### count

Documents count

```php
public count(): int
```











***

### limit

Set limit

```php
public limit(mixed $limit): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |


**Return Value:**

Cursor



***

### sort

Set sort

```php
public sort(mixed $sorts): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sorts` | **mixed** |  |


**Return Value:**

Cursor



***

### skip

Set skip

```php
public skip(mixed $skip): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$skip` | **mixed** |  |


**Return Value:**

Cursor



***

### each

Loop through result set

```php
public each(mixed $callable): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### toArray

Get documents matching criteria

```php
public toArray(): array
```











***

### getData

Get documents matching criteria

```php
protected getData(): array
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
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
