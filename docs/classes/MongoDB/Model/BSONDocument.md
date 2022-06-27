***

# BSONDocument

Model class for a BSON document.

The internal data will be cast to an object during BSON serialization to ensure that it becomes a BSON document.

* Full name: `\MongoDB\Model\BSONDocument`
* Parent class: [`ArrayObject`](../../ArrayObject.md)
* This class implements:
  [`\JsonSerializable`](../../JsonSerializable.md), [`\MongoDB\BSON\Serializable`](../BSON/Serializable.md)
  , [`\MongoDB\BSON\Unserializable`](../BSON/Unserializable.md)

## Methods

### __clone

Deep clone this BSONDocument.

```php
public __clone(): mixed
```

***

### __construct

This overrides the parent constructor to allow property access of entries by default.

```php
public __construct(array $input = [], int $flags = ArrayObject::ARRAY_AS_PROPS, string $iterator_class = &#039;ArrayIterator&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **array** |  |
| `$flags` | **int** |  |
| `$iterator_class` | **string** |  |

**See Also:**

* http://php.net/arrayobject.construct -

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

Serialize the document to BSON.

```php
public bsonSerialize(): object
```

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
public jsonSerialize(): object
```

**See Also:**

* http://php.net/jsonserializable.jsonserialize -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
