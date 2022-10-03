***

# Session





* Full name: `\Lime\Helper\Session`
* Parent class: [`\Lime\Helper`](../Helper.md)



## Properties


### initialized



```php
protected bool $initialized
```






***

### name



```php
public string $name
```






***

## Methods


### init



```php
public init(?string $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **?string** |  |




***

### write



```php
public write(string $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |




***

### read



```php
public read(string $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |




***

### delete



```php
public delete(string $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### destroy



```php
public destroy(): void
```











***

### close



```php
public close(): void
```











***

### regenerateId



```php
public regenerateId(bool $delete_old_session = false): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delete_old_session` | **bool** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Lime\App $app, mixed $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |




***

### initialize



```php
protected initialize(): mixed
```











***

### __call



```php
public __call(mixed $name, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |




***

### __invoke



```php
public __invoke(mixed $helper): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |




***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***

