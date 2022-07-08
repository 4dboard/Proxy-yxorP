***

# CollectionInfo

Collection information model class.

This class models the collection information returned by the listCollections
command or, for legacy servers, queries on the "system.namespaces"
collection. It provides methods to access options for the collection.

* Full name: `\MongoDB\Model\CollectionInfo`
* This class implements:
[`\ArrayAccess`](../../ArrayAccess.md)

**See Also:**

* \MongoDB\Database::listCollections() - 
* https://github.com/mongodb/specifications/blob/master/source/enumerate-collections.rst - 



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
| `$info` | **array** | Collection info |




***

### __debugInfo

Return the collection info as an array.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/oop5.magic#language.oop5.magic.debuginfo - 

***

### getCappedMax

Return the maximum number of documents to keep in the capped collection.

```php
public getCappedMax(): int|null
```











***

### getCappedSize

Return the maximum size (in bytes) of the capped collection.

```php
public getCappedSize(): int|null
```











***

### getName

Return the collection name.

```php
public getName(): string
```











***

### getOptions

Return the collection options.

```php
public getOptions(): array
```











***

### isCapped

Return whether the collection is a capped collection.

```php
public isCapped(): bool
```











***

### offsetExists

Check whether a field exists in the collection information.

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

Return the field's value from the collection information.

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
public offsetSet(mixed $key, mixed $value): mixed
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
public offsetUnset(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetunset - 

***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
