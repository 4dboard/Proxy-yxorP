***

# LiteDBQuery





* Full name: `\LiteDBQuery`



## Properties


### cmd



```php
protected $cmd
```






***

### connection



```php
protected $connection
```






***

### fields



```php
protected $fields
```






***

### table



```php
protected $table
```






***

### joins



```php
protected $joins
```






***

### conditions



```php
protected $conditions
```






***

### group



```php
protected $group
```






***

### having



```php
protected $having
```






***

### order



```php
protected $order
```






***

### limit



```php
protected $limit
```






***

### offset



```php
protected $offset
```






***

## Methods


### __construct



```php
public __construct(mixed $connection, mixed $table = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$connection` | **mixed** |  |
| `$table` | **mixed** |  |




***

### select



```php
public select(mixed $fields = &#039;*&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **mixed** |  |




***

### fields



```php
public fields(mixed $fields = &#039;*&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **mixed** |  |




***

### from



```php
public from(mixed $table): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **mixed** |  |




***

### where



```php
public where(mixed $conditions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conditions` | **mixed** |  |




***

### join



```php
public join(mixed $type, mixed $join): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$join` | **mixed** |  |




***

### group



```php
public group(mixed $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |




***

### having



```php
public having(mixed $having): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$having` | **mixed** |  |




***

### order



```php
public order(mixed $order): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **mixed** |  |




***

### limit



```php
public limit(mixed $limit): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |




***

### offset



```php
public offset(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### all



```php
public all(mixed $condition = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$condition` | **mixed** |  |




***

### one



```php
public one(mixed $conditions = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conditions` | **mixed** |  |




***

### count



```php
public count(mixed $conditions = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conditions` | **mixed** |  |




***

### sum



```php
public sum(mixed $field, mixed $conditions = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **mixed** |  |
| `$conditions` | **mixed** |  |




***

### avg



```php
public avg(mixed $field, mixed $conditions = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **mixed** |  |
| `$conditions` | **mixed** |  |




***

### insert



```php
public insert(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### update



```php
public update(mixed $data, mixed $conditions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$conditions` | **mixed** |  |




***

### delete



```php
public delete(mixed $conditions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conditions` | **mixed** |  |




***

### truncate



```php
public truncate(): mixed
```











***

### drop



```php
public drop(): mixed
```











***

### buildSelect



```php
public buildSelect(): mixed
```











***

### buildConditions



```php
protected buildConditions(mixed $conditions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conditions` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
