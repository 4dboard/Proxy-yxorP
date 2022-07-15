***

# Database





* Full name: `\MongoLite\Database`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DSN_PATH_MEMORY`|public| |&#039;:memory:&#039;|

## Properties


### connection



```php
public $connection
```






***

### collections



```php
protected $collections
```






***

### path



```php
protected $path
```






***

### document_criterias



```php
protected $document_criterias
```






***

## Methods


### __construct



```php
public __construct(mixed $path = self::DSN_PATH_MEMORY, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$options` | **mixed** |  |




***

### callCriteriaFunction



```php
public callCriteriaFunction(mixed $id, mixed $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$document` | **mixed** |  |




***

### registerCriteriaFunction



```php
public registerCriteriaFunction(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### vacuum



```php
public vacuum(): mixed
```











***

### drop



```php
public drop(): mixed
```











***

### dropCollection



```php
public dropCollection(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### listCollections



```php
public listCollections(): mixed
```











***

### getCollectionNames



```php
public getCollectionNames(): mixed
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



```php
public selectCollection(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### createCollection



```php
public createCollection(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***

