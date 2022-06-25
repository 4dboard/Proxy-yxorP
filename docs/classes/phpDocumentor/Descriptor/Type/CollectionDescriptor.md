***

# CollectionDescriptor

Descriptor representing a collection or compound type of collection object.

This descriptor represents any type that is capable of containing other typed values. Examples of such types can be an
array, DoctrineCollection or ArrayObject.

* Full name: `\phpDocumentor\Descriptor\Type\CollectionDescriptor`
* This class implements:
  [`\phpDocumentor\Descriptor\Interfaces\TypeInterface`](../Interfaces/TypeInterface.md)

## Properties

### baseType

```php
protected \phpDocumentor\Descriptor\Interfaces\TypeInterface|string $baseType
```

***

### types

```php
protected \phpDocumentor\Descriptor\Interfaces\TypeInterface[] $types
```

***

### keyTypes

```php
protected \phpDocumentor\Descriptor\Interfaces\TypeInterface[] $keyTypes
```

***

## Methods

### __construct

Initializes this type collection with its base-type.

```php
public __construct(\phpDocumentor\Descriptor\Interfaces\TypeInterface $baseType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$baseType` | **\phpDocumentor\Descriptor\Interfaces\TypeInterface** |  |

***

### getName

Returns the name for this type.

```php
public getName(): \phpDocumentor\Descriptor\Interfaces\TypeInterface
```

***

### getBaseType

Returns the base type for this Collection or null if there is no attached type.

```php
public getBaseType(): \phpDocumentor\Descriptor\Interfaces\TypeInterface|null
```

When the presented collection is governed by an object (such as a Collection object) then a reference to that object
will be returned. If however the base type for this collection is a simple type such as an 'array' then we return null
to indicate there is no object governing this type.









***

### setBaseType

Registers the base type for this collection type.

```php
public setBaseType(string|\phpDocumentor\Descriptor\Interfaces\TypeInterface $baseType): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$baseType` | **string&#124;\phpDocumentor\Descriptor\Interfaces\TypeInterface** |  |

***

### setTypes

Register the type, or set of types, to which a value in this type of collection can belong.

```php
public setTypes(\phpDocumentor\Descriptor\Interfaces\TypeInterface[] $types): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **\phpDocumentor\Descriptor\Interfaces\TypeInterface[]** |  |

***

### getTypes

Returns the type, or set of types, to which a value in this type of collection can belong.

```php
public getTypes(): \phpDocumentor\Descriptor\Interfaces\TypeInterface[]
```

***

### setKeyTypes

Registers the type, or set of types, to which a *key* in this type of collection can belong.

```php
public setKeyTypes(\phpDocumentor\Descriptor\Interfaces\TypeInterface[] $types): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **\phpDocumentor\Descriptor\Interfaces\TypeInterface[]** |  |

***

### getKeyTypes

Registers the type, or set of types, to which a *key* in this type of collection can belong.

```php
public getKeyTypes(): \phpDocumentor\Descriptor\Interfaces\TypeInterface[]
```

***

### __toString

Returns a human-readable representation for this type.

```php
public __toString(): string
```

yxorP::get('REQUEST')
