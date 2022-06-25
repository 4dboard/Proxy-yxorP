***

# ParamStore





* Full name: `\yxorP\Http\ParamStore`



## Properties


### data



```php
private array $data
```






***

### case_sensitive



```php
private mixed $case_sensitive
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

### all



```php
public all(): array
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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
