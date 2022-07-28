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
public \PDO $connection
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

### vacuum

Vacuum database

```php
public vacuum(): void
```











***

### drop

Drop database

```php
public drop(): void
```











***

### dropCollection

Drop a collection

```php
public dropCollection(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### listCollections

Get all collections in the database

```php
public listCollections(): array
```











***

### getCollectionNames

Get all collection names in the database

```php
public getCollectionNames(): array
```











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

### createCollection

Create a collection

```php
public createCollection(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***


***

