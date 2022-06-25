***

# GetterMetadata

Stores all metadata needed for validating a class property via its getter method.

A property getter is any method that is equal to the property's name, prefixed with either "get" or "is". That method
will be used to access the property's value.

The getter will be invoked by reflection, so the access of private and protected getters is supported.

This class supports serialization and cloning.

* Full name: `\Symfony\Component\Validator\Mapping\GetterMetadata`
* Parent class: [`\Symfony\Component\Validator\Mapping\MemberMetadata`](./MemberMetadata.md)

**See Also:**

* \Symfony\Component\Validator\Mapping\PropertyMetadataInterface -

## Methods

### __construct

```php
public __construct(string $class, string $property, string|null $method = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The class the getter is defined on |
| `$property` | **string** | The property which the getter returns |
| `$method` | **
string&#124;null** | The method that is called to retrieve the value being validated (null for auto-detection) |

***

### getPropertyValue

{@inheritdoc}

```php
public getPropertyValue(mixed $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

***

### newReflectionMember

Creates a new reflection instance for accessing the member's value.

```php
protected newReflectionMember(mixed $objectOrClassName): \ReflectionMethod|\ReflectionProperty
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **mixed** | The object or the class name |

**Return Value:**

The reflection instance



***

## Inherited methods

### __construct

```php
public __construct(): mixed
```

***

### accept

Exists for compatibility with the deprecated {@link Symfony\Component\Validator\MetadataInterface}.

```php
public accept(\Symfony\Component\Validator\ValidationVisitorInterface $visitor, mixed $value, mixed $group, mixed $propertyPath): mixed
```

Should not be used.

Implemented for backward compatibility with Symfony < 2.5.

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Symfony\Component\Validator\ValidationVisitorInterface** |  |
| `$value` | **mixed** |  |
| `$group` | **mixed** |  |
| `$propertyPath` | **mixed** |  |

***

### addConstraint

Adds a constraint.

```php
public addConstraint(\Symfony\Component\Validator\Constraint $constraint): $this
```

If the constraint {@link} is added, the cascading strategy will be changed to {@link}. Depending on the properties
$traverse and $deep of that constraint, the traversal strategy will be set to one of the following:

- {@link} if $traverse is enabled and $deep is enabled
- {@link} | {@link} if $traverse is enabled, but $deep is disabled
- {@link} if $traverse is disabled

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constraint` | **\Symfony\Component\Validator\Constraint** |  |

***

### __sleep

Returns the names of the properties that should be serialized.

```php
public __sleep(): string[]
```

***

### getName

Returns the name of the member.

```php
public getName(): string
```

***

### getClassName

{@inheritdoc}

```php
public getClassName(): mixed
```

***

### getPropertyName

{@inheritdoc}

```php
public getPropertyName(): mixed
```

***

### isPublic

Returns whether this member is public.

```php
public isPublic(object|string $objectOrClassName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **object&#124;string** | The object or the class name |

***

### isProtected

Returns whether this member is protected.

```php
public isProtected(object|string $objectOrClassName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **object&#124;string** | The object or the class name |

***

### isPrivate

Returns whether this member is private.

```php
public isPrivate(object|string $objectOrClassName): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **object&#124;string** | The object or the class name |

***

### isCascaded

Returns whether objects stored in this member should be validated.

```php
public isCascaded(): bool
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### isCollectionCascaded

Returns whether arrays or traversable objects stored in this member should be traversed and validated in each entry.

```php
public isCollectionCascaded(): bool
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### isCollectionCascadedDeeply

Returns whether arrays or traversable objects stored in this member should be traversed recursively for inner
arrays/traversable objects.

```php
public isCollectionCascadedDeeply(): bool
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getReflectionMember

Returns the reflection instance for accessing the member's value.

```php
public getReflectionMember(object|string $objectOrClassName): \ReflectionMethod|\ReflectionProperty
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **object&#124;string** | The object or the class name |

**Return Value:**

The reflection instance



***

### newReflectionMember

Creates a new reflection instance for accessing the member's value.

```php
protected newReflectionMember(object|string $objectOrClassName): \ReflectionMethod|\ReflectionProperty
```

Must be implemented by subclasses.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClassName` | **object&#124;string** | The object or the class name |

**Return Value:**

The reflection instance



***

### __clone

Clones this object.

```php
public __clone(): mixed
```

***

### addConstraints

Adds an list of constraints.

```php
public addConstraints(\Symfony\Component\Validator\Constraint[] $constraints): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constraints` | **\Symfony\Component\Validator\Constraint[]** | The constraints to add |

***

### getConstraints

Returns all constraints of this element.

```php
public getConstraints(): \Symfony\Component\Validator\Constraint[]
```

**Return Value:**

A list of Constraint instances



***

### hasConstraints

Returns whether this element has any constraints.

```php
public hasConstraints(): bool
```

***

### findConstraints

{@inheritdoc}

```php
public findConstraints(mixed $group): mixed
```

Aware of the global group (* group).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |

***

### getCascadingStrategy

Returns the strategy for cascading objects.

```php
public getCascadingStrategy(): int
```

**Return Value:**

The cascading strategy



***

### getTraversalStrategy

Returns the strategy for traversing traversable objects.

```php
public getTraversalStrategy(): int
```

**Return Value:**

The traversal strategy yxorP::get('REQUEST')
