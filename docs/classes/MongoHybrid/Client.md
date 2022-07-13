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



```php
public removeKey(mixed $collection, mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |




***

### keyExists



```php
public keyExists(mixed $collection, mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |




***

### incrKey



```php
public incrKey(mixed $collection, mixed $key, mixed $by = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$by` | **mixed** |  |




***

### getKey



```php
public getKey(mixed $collection, mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### setKey



```php
public setKey(mixed $collection, mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### decrKey



```php
public decrKey(mixed $collection, mixed $key, mixed $by = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$by` | **mixed** |  |




***

### rpush



```php
public rpush(mixed $collection, mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### lpush



```php
public lpush(mixed $collection, mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### lset



```php
public lset(mixed $collection, mixed $key, mixed $index, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$index` | **mixed** |  |
| `$value` | **mixed** |  |




***

### lindex



```php
public lindex(mixed $collection, mixed $key, mixed $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$index` | **mixed** |  |




***

### hgetall



```php
public hgetall(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hexists



```php
public hexists(mixed $collection, mixed $key, mixed $field): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$field` | **mixed** |  |




***

### hvals



```php
public hvals(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hlen



```php
public hlen(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hkeys



```php
public hkeys(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hdel



```php
public hdel(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hincrby



```php
public hincrby(mixed $collection, mixed $key, mixed $field, mixed $by = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$field` | **mixed** |  |
| `$by` | **mixed** |  |




***

### hget



```php
public hget(mixed $collection, mixed $key, mixed $field, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$field` | **mixed** |  |
| `$default` | **mixed** |  |




***

### hset



```php
public hset(mixed $collection, mixed $key, mixed $field, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$key` | **mixed** |  |
| `$field` | **mixed** |  |
| `$value` | **mixed** |  |




***

### hmget



```php
public hmget(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### hmset



```php
public hmset(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




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
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
