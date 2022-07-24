***

# BSONArray

Model class for a BSON array.

The internal data will be filtered through array_values() during BSON
serialization to ensure that it becomes a BSON array.

* Full name: `\MongoDB\Model\BSONArray`
* Parent class: [`ArrayObject`](../../ArrayObject.md)
* This class implements:
[`\JsonSerializable`](../../JsonSerializable.md), [`\MongoDB\BSON\Serializable`](../BSON/Serializable.md), [`\MongoDB\BSON\Unserializable`](../BSON/Unserializable.md)




## Methods


### __clone

Clone this BSONArray.

```php
public __clone(): mixed
```











***

### __set_state

Factory method for var_export().

```php
public static __set_state(array $properties): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |



**See Also:**

* http://php.net/oop5.magic#object.set-state - * http://php.net/var-export - 

***

### bsonSerialize

Serialize the array to BSON.

```php
public bsonSerialize(): array
```

The array data will be numerically reindexed to ensure that it is stored
as a BSON array.








**See Also:**

* http://php.net/mongodb-bson-serializable.bsonserialize - 

***

### bsonUnserialize

Unserialize the document to BSON.

```php
public bsonUnserialize(array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** | Array data |



**See Also:**

* http://php.net/mongodb-bson-unserializable.bsonunserialize - 

***

### jsonSerialize

Serialize the array to JSON.

```php
public jsonSerialize(): array
```

The array data will be numerically reindexed to ensure that it is stored
as a JSON array.








**See Also:**

* http://php.net/jsonserializable.jsonserialize - 

***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
