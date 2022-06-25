***

# ClassMetadata

Default implementation of {@link ClassMetadataInterface}.

This class supports serialization and cloning.

* Full name: `\Symfony\Component\Validator\Mapping\ClassMetadata`
* Parent class: [`\Symfony\Component\Validator\Mapping\ElementMetadata`](./ElementMetadata.md)
* This class implements:
  [`\Symfony\Component\Validator\Mapping\ClassMetadataInterface`](./ClassMetadataInterface.md)

## Properties

### reflClass

```php
private \ReflectionClass $reflClass
```

***

## Methods

### __construct

Constructs a metadata for the given class.

```php
public __construct(string $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |

***

### accept

{@inheritdoc}

```php
public accept(\Symfony\Component\Validator\ValidationVisitorInterface $visitor, mixed $value, mixed $group, mixed $propertyPath, mixed $propagatedGroup = null): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Symfony\Component\Validator\ValidationVisitorInterface** |  |
| `$value` | **mixed** |  |
| `$group` | **mixed** |  |
| `$propertyPath` | **mixed** |  |
| `$propagatedGroup` | **mixed** |  |

***

### __sleep

{@inheritdoc}

```php
public __sleep(): mixed
```

***

### getClassName

{@inheritdoc}

```php
public getClassName(): mixed
```

***

### getDefaultGroup

Returns the name of the default group for this class.

```php
public getDefaultGroup(): string
```

For each class, the group "Default" is an alias for the group
"<ClassName>", where <ClassName> is the non-namespaced name of the class. All constraints implicitly or explicitly
assigned to group
"Default" belong to both of these groups, unless the class defines a group sequence.

If a class defines a group sequence, validating the class in "Default"
will validate the group sequence. The constraints assigned to "Default"
can still be validated by validating the class in "<ClassName>".

**Return Value:**

The name of the default group



***

### addConstraint

{@inheritdoc}

```php
public addConstraint(\Symfony\Component\Validator\Constraint $constraint): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constraint` | **\Symfony\Component\Validator\Constraint** |  |

***

### addPropertyConstraint

Adds a constraint to the given property.

```php
public addPropertyConstraint(string $property, \Symfony\Component\Validator\Constraint $constraint): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | The name of the property |
| `$constraint` | **\Symfony\Component\Validator\Constraint** | The constraint |

***

### addPropertyConstraints

```php
public addPropertyConstraints(string $property, \Symfony\Component\Validator\Constraint[] $constraints): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |
| `$constraints` | **\Symfony\Component\Validator\Constraint[]** |  |

***

### addGetterConstraint

Adds a constraint to the getter of the given property.

```php
public addGetterConstraint(string $property, \Symfony\Component\Validator\Constraint $constraint): $this
```

The name of the getter is assumed to be the name of the property with an uppercased first letter and either the prefix "
get" or "is".

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | The name of the property |
| `$constraint` | **\Symfony\Component\Validator\Constraint** | The constraint |

***

### addGetterMethodConstraint

Adds a constraint to the getter of the given property.

```php
public addGetterMethodConstraint(string $property, string $method, \Symfony\Component\Validator\Constraint $constraint): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | The name of the property |
| `$method` | **string** | The name of the getter method |
| `$constraint` | **\Symfony\Component\Validator\Constraint** | The constraint |

***

### addGetterConstraints

```php
public addGetterConstraints(string $property, \Symfony\Component\Validator\Constraint[] $constraints): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |
| `$constraints` | **\Symfony\Component\Validator\Constraint[]** |  |

***

### addGetterMethodConstraints

```php
public addGetterMethodConstraints(string $property, string $method, \Symfony\Component\Validator\Constraint[] $constraints): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |
| `$method` | **string** |  |
| `$constraints` | **\Symfony\Component\Validator\Constraint[]** |  |

***

### mergeConstraints

Merges the constraints of the given metadata into this object.

```php
public mergeConstraints(\Symfony\Component\Validator\Mapping\ClassMetadata $source): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |

***

### addMemberMetadata

Adds a member metadata.

```php
protected addMemberMetadata(\Symfony\Component\Validator\Mapping\MemberMetadata $metadata): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\MemberMetadata** |  |

***

### hasMemberMetadatas

Returns true if metadatas of members is present for the given property.

```php
public hasMemberMetadatas(string $property): bool
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | The name of the property |

***

### getMemberMetadatas

Returns all metadatas of members describing the given property.

```php
public getMemberMetadatas(string $property): \Symfony\Component\Validator\Mapping\MemberMetadata[]
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | The name of the property |

**Return Value:**

An array of MemberMetadata



***

### hasPropertyMetadata

{@inheritdoc}

```php
public hasPropertyMetadata(mixed $property): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |

***

### getPropertyMetadata

{@inheritdoc}

```php
public getPropertyMetadata(mixed $property): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |

***

### getConstrainedProperties

Returns the names of all constrained properties.

```php
public getConstrainedProperties(): string[]
```

**Return Value:**

A list of property names



***

### setGroupSequence

Sets the default group sequence for this class.

```php
public setGroupSequence(string[]|\Symfony\Component\Validator\Constraints\GroupSequence $groupSequence): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groupSequence` | **string[]
&#124;\Symfony\Component\Validator\Constraints\GroupSequence** | An array of group names |

***

### hasGroupSequence

Returns whether the "Default" group is overridden by a group sequence.

```php
public hasGroupSequence(): bool
```

**Return Value:**

Returns true if the "Default" group is overridden



***

### getGroupSequence

Returns the group sequence that overrides the "Default" group for this class.

```php
public getGroupSequence(): \Symfony\Component\Validator\Constraints\GroupSequence|null
```

**Return Value:**

The group sequence or null



***

### getReflectionClass

Returns a ReflectionClass instance for this class.

```php
public getReflectionClass(): \ReflectionClass
```

***

### setGroupSequenceProvider

Sets whether a group sequence provider should be used.

```php
public setGroupSequenceProvider(bool $active): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$active` | **bool** |  |

***

### isGroupSequenceProvider

Returns whether the "Default" group is overridden by a dynamic group sequence obtained by the validated objects.

```php
public isGroupSequenceProvider(): bool
```

**Return Value:**

Returns true if the "Default" group is overridden by a dynamic group sequence



***

### getCascadingStrategy

Class nodes are never cascaded.

```php
public getCascadingStrategy(): mixed
```

{@inheritdoc}









***

### addPropertyMetadata

```php
private addPropertyMetadata(\Symfony\Component\Validator\Mapping\PropertyMetadataInterface $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\PropertyMetadataInterface** |  |

***

## Inherited methods

### __construct

```php
public __construct(): mixed
```

***

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
