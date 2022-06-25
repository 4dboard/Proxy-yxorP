***

# ElementMetadata

Contains the metadata of a structural element.

* Full name: `\Symfony\Component\Validator\Mapping\ElementMetadata`
* Parent class: [`\Symfony\Component\Validator\Mapping\GenericMetadata`](./GenericMetadata.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class is an **Abstract class**

## Methods

### __construct

```php
public __construct(): mixed
```

***

## Inherited methods

### __sleep

Returns the names of the properties that should be serialized.

```php
public __sleep(): string[]
```

***

### __clone

Clones this object.

```php
public __clone(): mixed
```

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

The traversal strategy



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

yxorP::get('REQUEST')
