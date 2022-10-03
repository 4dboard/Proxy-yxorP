***

# Index





* Full name: `\IndexLite\Index`



## Properties


### path



```php
protected string $path
```






***

### db



```php
protected \SQLite3 $db
```






***

## Methods


### __construct



```php
public __construct(string $path, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$options` | **array** |  |




***

### add



```php
public add(mixed $id, array $document, mixed $safe = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$document` | **array** |  |
| `$safe` | **mixed** |  |




***

### remove



```php
public remove(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### search



```php
public search(string $query, ?array $fields = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** |  |
| `$fields` | **?array** |  |




***

### stringify



```php
protected stringify(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***

