***

# ObjectThatImplementsBasics

* Full name: `\PhpCollection\Tests\ObjectThatImplementsBasics`
* This class implements:
  [`\PhpCollection\ObjectBasics`](../ObjectBasics.md)

## Properties

### value

```php
private $value
```

***

## Methods

### __construct

```php
public __construct(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### hash

Produces a hash for the given object.

```php
public hash(): string|int
```

If two objects are equal (as per the equals() method), the hash() method must produce the same hash for them.

The reverse can, but does not necessarily have to be true. That is, if two objects have the same hash, they do not
necessarily have to be equal, but the equals() method must be called to be sure.

When implementing this method try to use a simple and fast algorithm that produces reasonably different results for
non-equal objects, and shift the heavy comparison logic to equals().









***

### equals

Whether two objects are equal.

```php
public equals(\PhpCollection\ObjectBasics $other): bool
```

This can compare by referential equality (===), or in case of value objects like (\DateTime) compare the individual
properties of the objects; it's up to the implementation.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **\PhpCollection\ObjectBasics** |  |

yxorP::get('REQUEST')
