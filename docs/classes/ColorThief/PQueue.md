***

# PQueue

Simple priority queue.



* Full name: `\ColorThief\PQueue`



## Properties


### contents



```php
private array $contents
```






***

### sorted



```php
private bool $sorted
```






***

### comparator



```php
private callable $comparator
```






***

## Methods


### __construct



```php
public __construct(callable $comparator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comparator` | **callable** |  |




***

### setComparator



```php
public setComparator(callable $function): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **callable** |  |




***

### push



```php
public push(mixed $object): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### peek



```php
public peek(?int $index = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **?int** |  |




***

### sort



```php
private sort(): void
```











***

### size



```php
public size(): int
```











***

### pop



```php
public pop(): mixed|null
```











***

### map



```php
public map(callable $function, bool $sorted = true): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **callable** |  |
| `$sorted` | **bool** |  |




***

### getContent



```php
public getContent(bool $sorted = true): \ColorThief\T[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sorted` | **bool** |  |




***


***

