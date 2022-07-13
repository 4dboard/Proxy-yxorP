***

# Collection





* Full name: `\MongoLite\Collection`



## Properties


### database



```php
public $database
```






***

### name



```php
public $name
```






***

## Methods


### __construct



```php
public __construct(mixed $name, mixed $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$database` | **mixed** |  |




***

### drop



```php
public drop(): mixed
```











***

### insertMany



```php
public insertMany(mixed $documents): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documents` | **mixed** |  |




***

### insert



```php
public insert(mixed& $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### _insert



```php
protected _insert(mixed& $document): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### save



```php
public save(mixed& $document, mixed $create = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |
| `$create` | **mixed** |  |




***

### update



```php
public update(mixed $criteria, mixed $data, mixed $merge = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$data` | **mixed** |  |
| `$merge` | **mixed** |  |




***

### remove



```php
public remove(mixed $criteria): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### count



```php
public count(mixed $criteria = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***

### find



```php
public find(mixed $criteria = null, mixed $projection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |




***

### findOne



```php
public findOne(mixed $criteria = null, mixed $projection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |




***

### renameCollection



```php
public renameCollection(mixed $newname): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newname` | **mixed** |  |




***


***

