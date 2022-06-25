***

# IndexInfo

Index information model class.

This class models the index information returned by the listIndexes command
or, for legacy servers, queries on the "system.indexes" collection. It
provides methods to access common index options, and allows access to other
options through the ArrayAccess interface (write methods are not supported).
For information on keys and index options, see the referenced
db.collection.createIndex() documentation.

* Full name: `\MongoDB\Model\IndexInfo`
* This class implements:
[`\ArrayAccess`](../../ArrayAccess.md)

**See Also:**

* \MongoDB\Collection::listIndexes() - 
* https://github.com/mongodb/specifications/blob/master/source/enumerate-indexes.rst - 
* http://docs.mongodb.org/manual/reference/method/db.collection.createIndex/ - 



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
| `$info` | **array** | Index info |




***

### __debugInfo

Return the collection info as an array.

```php
public __debugInfo(): array
```










**See Also:**

* http://php.net/oop5.magic#language.oop5.magic.debuginfo - 

***

### __toString

Return the index name to allow casting IndexInfo to string.

```php
public __toString(): string
```











***

### getKey

Return the index key.

```php
public getKey(): array
```











***

### getName

Return the index name.

```php
public getName(): string
```











***

### getNamespace

Return the index namespace (e.g. "db.collection").

```php
public getNamespace(): string
```











***

### getVersion

Return the index version.

```php
public getVersion(): int
```











***

### is2dSphere

Return whether or not this index is of type 2dsphere.

```php
public is2dSphere(): bool
```











***

### isGeoHaystack

Return whether or not this index is of type geoHaystack.

```php
public isGeoHaystack(): bool
```











***

### isSparse

Return whether this is a sparse index.

```php
public isSparse(): bool
```










**See Also:**

* http://docs.mongodb.org/manual/core/index-sparse/ - 

***

### isText

Return whether or not this index is of type text.

```php
public isText(): bool
```











***

### isTtl

Return whether this is a TTL index.

```php
public isTtl(): bool
```










**See Also:**

* http://docs.mongodb.org/manual/core/index-ttl/ - 

***

### isUnique

Return whether this is a unique index.

```php
public isUnique(): bool
```










**See Also:**

* http://docs.mongodb.org/manual/core/index-unique/ - 

***

### offsetExists

Check whether a field exists in the index information.

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

Return the field's value from the index information.

```php
public offsetGet(mixed $key): mixed
```

This method satisfies the Enumerating Indexes specification's requirement
that index fields be made accessible under their original names. It may
also be used to access fields that do not have a helper method.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |



**See Also:**

* http://php.net/arrayaccess.offsetget - * https://github.com/mongodb/specifications/blob/master/source/enumerate-indexes.rst#getting-full-index-information - 

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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
