***

# Database

Database object.



* Full name: `\MongoLite\Database`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DSN_PATH_MEMORY`|public|string|&#039;:memory:&#039;|

## Properties


### connection



```php
public \MongoLite\PDO $connection
```






***

### collections



```php
protected array $collections
```






***

### path



```php
protected string $path
```






***

### document_criterias



```php
protected array $document_criterias
```






***

## Methods


### __construct

Constructor

```php
public __construct(string $path = self::DSN_PATH_MEMORY, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$options` | **array** |  |




***

### registerCriteriaFunction

Register Criteria function

```php
public registerCriteriaFunction(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### callCriteriaFunction

Execute registred criteria function

```php
public callCriteriaFunction(string $id, array $document): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$document` | **array** |  |




***

### vacuum

Vacuum database

```php
public vacuum(): mixed
```











***

### drop

Drop database

```php
public drop(): mixed
```











***

### createCollection

Create a collection

```php
public createCollection(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### dropCollection

Drop a collection

```php
public dropCollection(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getCollectionNames

Get all collection names in the database

```php
public getCollectionNames(): array
```











***

### listCollections

Get all collections in the database

```php
public listCollections(): array
```











***

### selectCollection

Select collection

```php
public selectCollection(string $name): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __get



```php
public __get(mixed $collection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
