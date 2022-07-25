***

# Mongo





* Full name: `\MongoHybrid\Mongo`



## Properties


### client



```php
protected $client
```






***

### db



```php
protected $db
```






***

### options



```php
protected $options
```






***

## Methods


### __construct



```php
public __construct(mixed $server, mixed $options = [], mixed $driverOptions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **mixed** |  |
| `$options` | **mixed** |  |
| `$driverOptions` | **mixed** |  |




***

### getCollection



```php
public getCollection(mixed $name, mixed $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$db` | **mixed** |  |




***

### dropCollection



```php
public dropCollection(mixed $name, mixed $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$db` | **mixed** |  |




***

### renameCollection



```php
public renameCollection(mixed $name, mixed $newname, mixed $db = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$newname` | **mixed** |  |
| `$db` | **mixed** |  |




***

### findOneById



```php
public findOneById(mixed $collection, mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$id` | **mixed** |  |




***

### findOne



```php
public findOne(mixed $collection, mixed $filter = [], mixed $projection = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$filter` | **mixed** |  |
| `$projection` | **mixed** |  |




***

### find



```php
public find(mixed $collection, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$options` | **mixed** |  |




***

### insert



```php
public insert(mixed $collection, mixed& $doc): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$doc` | **mixed** |  |




***

### save



```php
public save(mixed $collection, mixed& $data, mixed $create = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$data` | **mixed** |  |
| `$create` | **mixed** |  |




***

### update



```php
public update(mixed $collection, mixed $criteria, mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$criteria` | **mixed** |  |
| `$data` | **mixed** |  |




***

### remove



```php
public remove(mixed $collection, mixed $filter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$filter` | **mixed** |  |




***

### removeField



```php
public removeField(mixed $collection, mixed $field, mixed $filter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$field` | **mixed** |  |
| `$filter` | **mixed** |  |




***

### renameField



```php
public renameField(mixed $collection, mixed $field, mixed $newfield, mixed $filter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$field` | **mixed** |  |
| `$newfield` | **mixed** |  |
| `$filter` | **mixed** |  |




***

### count



```php
public count(mixed $collection, mixed $filter = [], mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$filter` | **mixed** |  |
| `$options` | **mixed** |  |




***

### _fixMongoIds



```php
protected _fixMongoIds(mixed& $data, mixed $infinite = false, mixed $_level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$infinite` | **mixed** |  |
| `$_level` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
