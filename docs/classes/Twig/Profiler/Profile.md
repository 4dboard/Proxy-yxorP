***

# Profile





* Full name: `\Twig\Profiler\Profile`
* This class implements:
[`\IteratorAggregate`](../../IteratorAggregate.md), [`\Serializable`](../../Serializable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ROOT`|public| |&#039;ROOT&#039;|
|`BLOCK`|public| |&#039;block&#039;|
|`TEMPLATE`|public| |&#039;template&#039;|
|`MACRO`|public| |&#039;macro&#039;|

## Properties


### template



```php
private $template
```






***

### name



```php
private $name
```






***

### type



```php
private $type
```






***

### starts



```php
private $starts
```






***

### ends



```php
private $ends
```






***

### profiles



```php
private $profiles
```






***

## Methods


### __construct



```php
public __construct(mixed $template = &#039;main&#039;, mixed $type = self::ROOT, mixed $name = &#039;main&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |
| `$type` | **mixed** |  |
| `$name` | **mixed** |  |




***

### getTemplate



```php
public getTemplate(): mixed
```











***

### getType



```php
public getType(): mixed
```











***

### getName



```php
public getName(): mixed
```











***

### isRoot



```php
public isRoot(): mixed
```











***

### isTemplate



```php
public isTemplate(): mixed
```











***

### isBlock



```php
public isBlock(): mixed
```











***

### isMacro



```php
public isMacro(): mixed
```











***

### getProfiles



```php
public getProfiles(): mixed
```











***

### addProfile



```php
public addProfile(self $profile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **self** |  |




***

### getDuration

Returns the duration in microseconds.

```php
public getDuration(): float
```











***

### getMemoryUsage

Returns the memory usage in bytes.

```php
public getMemoryUsage(): int
```











***

### getPeakMemoryUsage

Returns the peak memory usage in bytes.

```php
public getPeakMemoryUsage(): int
```











***

### enter

Starts the profiling.

```php
public enter(): mixed
```











***

### leave

Stops the profiling.

```php
public leave(): mixed
```











***

### reset



```php
public reset(): mixed
```











***

### getIterator



```php
public getIterator(): \Traversable
```











***

### serialize



```php
public serialize(): string
```











***

### unserialize



```php
public unserialize(mixed $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
