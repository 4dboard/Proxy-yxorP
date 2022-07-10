***

# DatabaseInfo

Database information model class.

This class models the database information returned by the listDatabases
command. It provides methods to access common database properties.

* Full name: `\MongoDB\Model\DatabaseInfo`
* This class implements:
[`\ArrayAccess`](../../ArrayAccess.md)

**See Also:**

* \MongoDB\Client::listDatabases() - 
* http://docs.mongodb.org/manual/reference/command/listDatabases/ - 



## Properties


### info



```php
private array $info
```






***

## Methods


### __construct



```php
public __construct(array $info): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$info` | **array** | Database info |




***

### __debugInfo

Return the database info as an array.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/oop5.magic#language.oop5.magic.debuginfo - 

***

### getName

Return the database name.

```php
public getName(): string
```











***

### getSizeOnDisk

Return the databases size on disk (in bytes).

```php
public getSizeOnDisk(): int
```











***

### isEmpty

Return whether the database is empty.

```php
public isEmpty(): bool
```











***

### offsetExists

Check whether a field exists in the database information.

```php
public offsetExists(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetexists - 

***

### offsetGet

Return the field's value from the database information.

```php
public offsetGet(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetget - 

***

### offsetSet

Not supported.

```php
public offsetSet(mixed $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetset - 

***

### offsetUnset

Not supported.

```php
public offsetUnset(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetunset - 

***


***
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
