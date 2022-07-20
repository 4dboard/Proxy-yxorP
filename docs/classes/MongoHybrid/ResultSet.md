***

# ResultSet





* Full name: `\MongoHybrid\ResultSet`
* Parent class: [`ArrayObject`](../ArrayObject.md)



## Properties


### driver

Driver

```php
protected $driver
```






***

### cache



```php
protected array $cache
```






***

## Methods


### __construct

Constructor

```php
public __construct( $driver, iterable& $documents): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **** |  |
| `$documents` | **iterable** |  |




***

### hasOne



```php
public hasOne(mixed $collections): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collections` | **mixed** |  |




***

### hasMany



```php
public hasMany(mixed $collections): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collections` | **mixed** |  |




***

### toArray



```php
public toArray(): mixed
```











***

### __toString



```php
public __toString(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
