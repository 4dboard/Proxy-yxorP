***

# paramStore

A class that stores parameters.



* Full name: `\yxorP\app\lib\http\paramStore`



## Properties


### data

Declaring a private variable called `$data` that is an array.

```php
private array $data
```






***

### case_sensitive

Declaring a private variable called `$case_sensitive` that can be of any type.

```php
private string|array|object|null $case_sensitive
```






***

## Methods


### __construct

A constructor.

```php
public __construct(mixed $parameters = array(), mixed $case_sensitive): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **mixed** |  |
| `$case_sensitive` | **mixed** |  |




***

### replace

Replacing the data in the `$data` variable with the data in the `$data` parameter.

```php
public replace(array $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### clear

Clearing the data in the `$data` variable.

```php
public clear(): void
```











***

### set

Setting the value of the `$key` parameter to the `$value` parameter.

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

Checking if the `$key` parameter is in the `$data` variable.

```php
public has(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### remove

Removing the `$key` parameter from the `$data` variable.

```php
public remove(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### get

Getting the value of the `$key` parameter from the `$data` variable. If the `$key` parameter is not in the
`$data` variable, it will return the `$default` parameter.

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

Returning the `$data` variable.

```php
public all(): array
```











***

### __toString

Returning the `$data` variable as a JSON string.

```php
public __toString(): mixed
```











***

### normalizeKey

Normalizing the key.

```php
private normalizeKey(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***


***

