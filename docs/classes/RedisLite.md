***

# redisLite





* Full name: `\redisLite`



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



```php
public __construct(string $path = &#039;:memory:&#039;, array $options = []): mixed
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

### flushdb



```php
public flushdb(): void
```











***

### keys



```php
public keys(?string $pattern = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **?string** |  |




***

### del



```php
public del(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### type



```php
public type(string $key): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### get



```php
public get(string $key, mixed $default = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |




***

### decr



```php
public decr(string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### incr



```php
public incr(string $key, int $by = 1): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$by` | **int** |  |




***

### set



```php
public set(string $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### exists



```php
public exists(string $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### llen



```php
public llen(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### rpush



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



```php
public lindex(string $key, int $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$index` | **int** |  |




***

### hgetall



```php
public hgetall(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hexists



```php
public hexists(string $key, string $field): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |




***

### hvals



```php
public hvals(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hlen



```php
public hlen(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hkeys



```php
public hkeys(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hdel



```php
public hdel(string $key): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hincrby



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

### hget



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

### hset



```php
public hset(string $key, string $field, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$value` | **mixed** |  |




***

### hmget



```php
public hmget(string $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### hmset



```php
public hmset(string $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***


***

