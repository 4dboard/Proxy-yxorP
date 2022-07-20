***

# Client





* Full name: `\MongoHybrid\Client`



## Properties


### type



```php
public $type
```






***

### driver



```php
protected $driver
```






***

## Methods


### __construct



```php
public __construct(mixed $server, mixed $options = [], mixed $driverOptions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **mixed** |  |
| `$options` | **mixed** |  |
| `$driverOptions` | **mixed** |  |




***

### dropCollection



```php
public dropCollection(mixed $name, mixed $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$db` | **mixed** |  |




***

### renameCollection



```php
public renameCollection(mixed $name, mixed $newname, mixed $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$newname` | **mixed** |  |
| `$db` | **mixed** |  |




***

### save



```php
public save(mixed $collection, mixed& $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$data` | **mixed** |  |




***

### insert



```php
public insert(mixed $collection, mixed& $doc): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$doc` | **mixed** |  |




***

### removeKey

Delete Key(s)

```php
public removeKey(string $collection, string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |




***

### keyExists

Check if key exists

```php
public keyExists(string $collection, string $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |




***

### incrKey

Increment value by x

```php
public incrKey(string $collection, string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### getKey

Get value for specific key

```php
public getKey(string $collection, string $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$default` | **mixed** |  |




***

### setKey

Set value for specific key

```php
public setKey(string $collection, string $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### decrKey

Decrement value by x

```php
public decrKey(string $collection, string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### rpush

Add item to a value (right)

```php
public rpush(string $collection, string $key, mixed $value): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### lpush

Add item to a value (left)

```php
public lpush(string $collection, string $key, mixed $value): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### lset

Set the value of an element in a list by its index

```php
public lset(string $collection, string $key, int $index, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$index` | **int** |  |
| `$value` | **mixed** |  |




***

### lindex

Get an element from a list by its index

```php
public lindex(string $collection, string $key, int $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$index` | **int** |  |




***

### hgetall

Get all the fields and values in a hash

```php
public hgetall(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hexists

Determine if a hash field exists

```php
public hexists(string $collection, string $key, string $field): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |




***

### hvals

Get all the values in a hash

```php
public hvals(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hlen

Get the number of fields in a hash

```php
public hlen(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hkeys

Get all the fields in a hash

```php
public hkeys(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hdel

Delete one or more hash fields

```php
public hdel(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hincrby

Increment the integer value of a hash field by the given number

```php
public hincrby(mixed $collection, string $key, string $field, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$by` | **int** |  |




***

### hget

Get the value of a hash field

```php
public hget(string $collection, string $key, string $field, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$default` | **mixed** |  |




***

### hset

Set the string value of a hash field

```php
public hset(string $collection, string $key, string $field, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$value` | **mixed** |  |




***

### hmget

Get the values of all the given hash fields

```php
public hmget(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hmset

Set multiple hash fields to multiple values

```php
public hmset(string $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### __call



```php
public __call(mixed $method, mixed $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
