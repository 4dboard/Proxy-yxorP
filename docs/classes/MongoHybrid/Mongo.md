***

# Mongo





* Full name: `\MongoHybrid\Mongo`



## Properties


### client



```php
protected \MongoDB\Client $client
```






***

### db



```php
protected \MongoDB\Database $db
```






***

### options



```php
protected array $options
```






***

## Methods


### __construct



```php
public __construct(string $server, array $options = [], array $driverOptions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** |  |
| `$options` | **array** |  |
| `$driverOptions` | **array** |  |




***

### lstCollections



```php
public lstCollections(): array
```











***

### getCollection



```php
public getCollection(string $name, ?string $db = null): \MongoDB\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$db` | **?string** |  |




***

### dropCollection



```php
public dropCollection(string $name, ?string $db = null): array|object
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

### findOneById



```php
public findOneById(string $collection, mixed $id): ?array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$id` | **mixed** |  |




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

### find



```php
public find(string $collection, array $options = []): \MongoHybrid\ResultSet
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
public removeField(string $collection, string $field, array $filter = []): mixed
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
public renameField(string $collection, string $field, string $newfield, array $filter = []): mixed
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
public count(string $collection, ?array $filter = null, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$filter` | **?array** |  |
| `$options` | **array** |  |




***

### _fixForMongo



```php
protected _fixForMongo(mixed& $data, bool $infinite = false, int $_level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$infinite` | **bool** |  |
| `$_level` | **int** |  |




***

### getObjectID



```php
protected getObjectID(mixed $v): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$v` | **mixed** |  |




***


***

