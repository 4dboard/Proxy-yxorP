***

# Collection

Collection object.



* Full name: `\MongoLite\Collection`



## Properties


### database



```php
public object $database
```






***

### name



```php
public string $name
```






***

## Methods


### __construct

Constructor

```php
public __construct(string $name, object $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$database` | **object** |  |




***

### drop

Drop collection

```php
public drop(): mixed
```











***

### insertMany

Insert many documents

```php
public insertMany(array $documents): \MongoLite\count
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documents` | **array** |  |


**Return Value:**

of inserted documents for arrays



***

### insert

Insert document

```php
public insert(array& $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **array** |  |


**Return Value:**

last_insert_id for single document or
count count of inserted documents for arrays



***

### _insert

Insert document

```php
protected _insert(array& $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **array** |  |




***

### save

Save document

```php
public save(array& $document, mixed $create = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **array** |  |
| `$create` | **mixed** |  |




***

### update

Update documents

```php
public update(mixed $criteria, array $data, mixed $merge = true): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$data` | **array** |  |
| `$merge` | **mixed** |  |




***

### remove

Remove documents

```php
public remove(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### count

Count documents in collections

```php
public count(mixed $criteria = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### find

Find documents

```php
public find(mixed $criteria = null, mixed $projection = null): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |


**Return Value:**

Cursor



***

### findOne

Find one document

```php
public findOne(mixed $criteria = null, mixed $projection = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |




***

### renameCollection

Rename Collection

```php
public renameCollection(string $newname): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newname` | **string** | [description] |




***


***
> Automatically generated from source code comments on 2022-07-02 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
