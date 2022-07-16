***

# paramStore





* Full name: `\yxorP\app\lib\http\paramStore`



## Properties


### data



```php
private array $data
```






***

### case_sensitive



```php
private string|array|object|null $case_sensitive
```






***

## Methods


### __construct



```php
public __construct(mixed $parameters = array(), mixed $case_sensitive = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **mixed** |  |
| `$case_sensitive` | **mixed** |  |




***

### replace



```php
public replace(array $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### clear



```php
public clear(): void
```











***

### set



```php
public set(mixed $key, mixed $value, mixed $replace = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$replace` | **mixed** |  |




***

### has



```php
public has(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### remove



```php
public remove(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### get



```php
public get(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### all



```php
public all(): array
```











***

### __toString



```php
public __toString(): mixed
```











***

### normalizeKey



```php
private normalizeKey(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
