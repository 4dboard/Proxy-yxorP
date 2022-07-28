***

# Client





* Full name: `\MemoryStorage\Client`



## Properties


### driver



```php
protected $driver
```






***

### key



```php
protected $key
```






***

## Methods


### __construct



```php
public __construct(string $server, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** |  |
| `$options` | **array** |  |




***

### flush



```php
public flush(): void
```











***

### get



```php
public get(string $key, mixed $default = null, bool $decrypt = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |
| `$decrypt` | **bool** |  |




***

### decrypt



```php
protected decrypt(string $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### set



```php
public set(string $key, mixed $value, bool $encrypt = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |
| `$encrypt` | **bool** |  |




***

### encrypt



```php
protected encrypt(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




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

