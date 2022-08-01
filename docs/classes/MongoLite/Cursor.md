***

# cursor

Cursor object.



* Full name: `\MongoLite\cursor`
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
protected \MongoLite\collection $collection
```






***

### criteria



```php
protected ?string $criteria
```






***

### projection



```php
protected ?array $projection
```






***

### limit



```php
protected ?int $limit
```






***

### skip



```php
protected ?int $skip
```






***

### sort



```php
protected ?array $sort
```






***

## Methods


### __construct

Constructor

```php
public __construct(object $collection, mixed $criteria, ?array $projection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **object** |  |
| `$criteria` | **mixed** |  |
| `$projection` | **?array** |  |




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
public limit(int $limit): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** |  |


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
public skip(int $skip): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$skip` | **int** |  |


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

### current



```php
public current(): array
```











***

### toArray

Get documents matching criteria

```php
public toArray(): array
```











***

### rewind

Iterator implementation

```php
public rewind(): void
```











***

### key



```php
public key(): int
```











***

### next



```php
public next(): void
```











***

### valid



```php
public valid(): bool
```











***

### getData

Get documents matching criteria

```php
protected getData(): array
```











***


***

