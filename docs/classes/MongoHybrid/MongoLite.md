***

# mongoLite





* Full name: `\MongoHybrid\mongoLite`



## Properties


### client



```php
protected \MongoLite\client $client
```






***

## Methods


### __construct



```php
public __construct(string $server, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** |  |
| `$options` | **array** |  |




***

### lstCollections



```php
public lstCollections(): array
```











***

### dropCollection



```php
public dropCollection(string $name, ?string $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$db` | **?string** |  |




***

### renameCollection



```php
public renameCollection(string $name, string $newname, ?string $db = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$newname` | **string** |  |
| `$db` | **?string** |  |




***

### findOne



```php
public findOne(string $collection, ?array $filter = null, ?array $projection = null): ?array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$filter` | **?array** |  |
| `$projection` | **?array** |  |




***

### getCollection



```php
public getCollection(string $name, ?string $db = null): \MongoLite\collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$db` | **?string** |  |




***

### findOneById



```php
public findOneById(string $collection, string $id): ?array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$id` | **string** |  |




***

### find



```php
public find(string $collection, array $options = []): \MongoHybrid\resultSet
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$options` | **array** |  |




***

### aggregate



```php
public aggregate(string $collection, array $pipeline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$pipeline` | **array** |  |




***

### getFindTermFilter



```php
public getFindTermFilter(mixed $term): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$term` | **mixed** |  |




***

### insert



```php
public insert(string $collection, array& $doc): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$doc` | **array** |  |




***

### save



```php
public save(string $collection, array& $data, bool $create = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$data` | **array** |  |
| `$create` | **bool** |  |




***

### update



```php
public update(string $collection, mixed $criteria, array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$criteria` | **mixed** |  |
| `$data` | **array** |  |




***

### remove



```php
public remove(string $collection, array $filter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$filter` | **array** |  |




***

### removeField



```php
public removeField(string $collection, string $field, array $filter = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$field` | **string** |  |
| `$filter` | **array** |  |




***

### renameField



```php
public renameField(string $collection, string $field, string $newfield, array $filter = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$field` | **string** |  |
| `$newfield` | **string** |  |
| `$filter` | **array** |  |




***

### count



```php
public count(string $collection, mixed $filter = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$filter` | **mixed** |  |




***


***

