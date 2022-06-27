***

# AuthorList

An array-acting object that holds many author instances.

* Full name: `\JMS\Serializer\Tests\Fixtures\AuthorList`
* This class implements:
  [`\IteratorAggregate`](../../../../IteratorAggregate.md), [`\Countable`](../../../../Countable.md)
  , [`\ArrayAccess`](../../../../ArrayAccess.md)

## Properties

### authors

```php
protected array $authors
```

***

## Methods

### add

```php
public add(\JMS\Serializer\Tests\Fixtures\Author $author): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$author` | **\JMS\Serializer\Tests\Fixtures\Author** |  |

***

### getIterator

```php
public getIterator(): mixed
```

**See Also:**

* \JMS\Serializer\Tests\Fixtures\IteratorAggregate -

***

### count

```php
public count(): mixed
```

**See Also:**

* \JMS\Serializer\Tests\Fixtures\Countable -

***

### offsetExists

```php
public offsetExists(mixed $offset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \JMS\Serializer\Tests\Fixtures\ArrayAccess -

***

### offsetGet

```php
public offsetGet(mixed $offset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \JMS\Serializer\Tests\Fixtures\ArrayAccess -

***

### offsetSet

```php
public offsetSet(mixed $offset, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$value` | **mixed** |  |

**See Also:**

* \JMS\Serializer\Tests\Fixtures\ArrayAccess -

***

### offsetUnset

```php
public offsetUnset(mixed $offset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \JMS\Serializer\Tests\Fixtures\ArrayAccess -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
