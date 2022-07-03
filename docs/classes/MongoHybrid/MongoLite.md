***

# MongoLite





* Full name: `\MongoHybrid\MongoLite`



## Properties


### client



```php
protected $client
```






***

## Methods


### __construct



```php
public __construct(mixed $server, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **mixed** |  |
| `$options` | **mixed** |  |




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

### findOne



```php
public findOne(mixed $collection, mixed $filter = [], mixed $projection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$filter` | **mixed** |  |
| `$projection` | **mixed** |  |




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
public count(mixed $collection, mixed $filter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$filter` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
