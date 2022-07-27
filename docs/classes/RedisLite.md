***

# RedisLite

RedisLite class.



* Full name: `\RedisLite`



## Properties


### path



```php
protected string $path
```






***

### connection



```php
protected object $connection
```






***

### table



```php
protected string $table
```






***

## Methods


### __construct

Constructor

```php
public __construct(string $path = &quot;:memory:&quot;, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$options` | **array** |  |




***

### createTable



```php
protected createTable(): mixed
```











***

### get

Get value for specific key

```php
public get(string $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |




***

### set

Set value for specific key

```php
public set(string $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### flushdb

Clear database

```php
public flushdb(): mixed
```











***

### exists

Check if key exists

```php
public exists(string $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### keys

Get all keys matching a pattern

```php
public keys(string $pattern = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |




***

### del

Delete Key(s)

```php
public del(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### type

Get value type

```php
public type(string $key): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### incr

Increment value by x

```php
public incr(string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### decr

Decrement value by x

```php
public decr(string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### llen

Count $value items

```php
public llen(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### rpush

Add item to a value (right)

```php
public rpush(string $key, mixed $value): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### lpush

Add item to a value (left)

```php
public lpush(string $key, mixed $value): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### lset

Set the value of an element in a list by its index

```php
public lset(string $key, int $index, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$index` | **int** |  |
| `$value` | **mixed** |  |




***

### lindex

Get an element from a list by its index

```php
public lindex(string $key, int $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$index` | **int** |  |




***

### hset

Set the string value of a hash field

```php
public hset(string $key, string $field, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$value` | **mixed** |  |




***

### hget

Get the value of a hash field

```php
public hget(string $key, string $field, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$default` | **mixed** |  |




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
public hexists(string $key, string $field): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |




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
public hincrby(string $key, string $field, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$by` | **int** |  |




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


***

