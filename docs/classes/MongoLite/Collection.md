***

# collection

Collection object.



* Full name: `\MongoLite\collection`



## Properties


### database



```php
public \MongoLite\Database $database
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
public __construct(string $name, \MongoLite\Database $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$database` | **\MongoLite\Database** |  |




***

### drop

Drop collection

```php
public drop(): void
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

### save

Save document

```php
public save(array& $document, bool $create = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **array** |  |
| `$create` | **bool** |  |




***

### update

Update documents

```php
public update(mixed $criteria, array $data, bool $merge = true): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$data` | **array** |  |
| `$merge` | **bool** |  |




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
public find(mixed $criteria = null, ?array $projection = null): \MongoLite\cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **?array** |  |


**Return Value:**

Cursor



***

### findOne

Find one document

```php
public findOne(mixed $criteria = null, ?array $projection = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **?array** |  |




***

### aggregate

Data aggregation

```php
public aggregate(array $pipeline): \MongoLite\Aggregation\Cursor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipeline` | **array** |  |




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


***

