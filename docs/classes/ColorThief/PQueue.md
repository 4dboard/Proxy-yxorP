***

# PQueue





* Full name: `\ColorThief\PQueue`



## Properties


### contents



```php
private $contents
```






***

### sorted



```php
private $sorted
```






***

### comparator



```php
private $comparator
```






***

## Methods


### __construct



```php
public __construct(mixed $comparator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comparator` | **mixed** |  |




***

### sort



```php
private sort(): mixed
```











***

### push



```php
public push(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### peek



```php
public peek(mixed $index = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |




***

### pop



```php
public pop(): mixed
```











***

### size



```php
public size(): mixed
```











***

### map



```php
public map(mixed $function): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |




***

### setComparator



```php
public setComparator(mixed $function): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |




***

### debug



```php
public debug(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
