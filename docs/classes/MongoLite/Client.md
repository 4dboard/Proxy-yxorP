***

# Client

Client object.



* Full name: `\MongoLite\Client`



## Properties


### databases



```php
protected array $databases
```






***

### path



```php
protected string $path
```






***

### options



```php
protected array $options
```






***

## Methods


### __construct

Constructor

```php
public __construct(string $path, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | - Pathname to database file or :memory: |
| `$options` | **array** |  |




***

### listDBs

List Databases

```php
public listDBs(): array
```









**Return Value:**

List of database names



***

### selectCollection

Select Collection

```php
public selectCollection(string $database, string $collection): \MongoLite\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **string** |  |
| `$collection` | **string** |  |




***

### selectDB

Select database

```php
public selectDB(string $name): \MongoLite\Database
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __get



```php
public __get(mixed $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
