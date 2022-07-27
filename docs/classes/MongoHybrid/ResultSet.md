***

# ResultSet





* Full name: `\MongoHybrid\ResultSet`
* Parent class: [`ArrayObject`](../ArrayObject.md)



## Properties


### driver

Driver

```php
protected \MongoHybrid\Mongo|\MongoHybrid\MongoLite $driver
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
public hasOne(array $collections): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collections` | **array** |  |




***

### hasMany



```php
public hasMany(array $collections): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collections` | **array** |  |




***

### toArray



```php
public toArray(): array
```











***

### __toString



```php
public __toString(): string
```











***


***

