***

# RecursiveContextualValidator

Recursive implementation of {@link ContextualValidatorInterface}.

* Full name: `\Symfony\Component\Validator\Validator\RecursiveContextualValidator`
* This class implements:
  [`\Symfony\Component\Validator\Validator\ContextualValidatorInterface`](./ContextualValidatorInterface.md)

## Properties

### context

```php
private $context
```

***

### defaultPropertyPath

```php
private $defaultPropertyPath
```

***

### defaultGroups

```php
private $defaultGroups
```

***

### metadataFactory

```php
private $metadataFactory
```

***

### validatorFactory

```php
private $validatorFactory
```

***

### objectInitializers

```php
private $objectInitializers
```

***

## Methods

### __construct

Creates a validator for the given context.

```php
public __construct(\Symfony\Component\Validator\Context\ExecutionContextInterface $context, \Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, \Symfony\Component\Validator\ConstraintValidatorFactoryInterface $validatorFactory, \Symfony\Component\Validator\ObjectInitializerInterface[] $objectInitializers = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The execution context |
| `$metadataFactory` | **
\Symfony\Component\Validator\MetadataFactoryInterface** | The factory for<br />fetching the metadata<br />of validated objects |
| `$validatorFactory` | **
\Symfony\Component\Validator\ConstraintValidatorFactoryInterface** | The factory for creating<br />constraint validators |
| `$objectInitializers` | **\Symfony\Component\Validator\ObjectInitializerInterface[]** | The object initializers |

***

### atPath

Appends the given path to the property path of the context.

```php
public atPath(mixed $path): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to append |

***

### validate

Validates a value against a constraint or a list of constraints.

```php
public validate(mixed $value, mixed $constraints = null, mixed $groups = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |
| `$constraints` | **mixed** | The constraint(s) to validate against |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |

***

### validateProperty

Validates a property of an object against the constraints specified for this property.

```php
public validateProperty(mixed $object, mixed $propertyName, mixed $groups = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** | The object |
| `$propertyName` | **mixed** | The name of the validated property |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |

***

### validatePropertyValue

Validates a value against the constraints specified for an object's property.

```php
public validatePropertyValue(mixed $objectOrClass, mixed $propertyName, mixed $value, mixed $groups = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClass` | **mixed** | The object or its class name |
| `$propertyName` | **mixed** | The name of the property |
| `$value` | **mixed** | The value to validate against the property&#039;s constraints |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |

***

### getViolations

Returns the violations that have been generated so far in the context of the validator.

```php
public getViolations(): \Symfony\Component\Validator\ConstraintViolationListInterface
```

**Return Value:**

The constraint violations



***

### normalizeGroups

Normalizes the given group or list of groups to an array.

```php
protected normalizeGroups(string|\Symfony\Component\Validator\Constraints\GroupSequence|(string|\Symfony\Component\Validator\Constraints\GroupSequence)[] $groups): (string|\Symfony\Component\Validator\Constraints\GroupSequence)[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **string&#124;\Symfony\Component\Validator\Constraints\GroupSequence&#124;(
string&#124;\Symfony\Component\Validator\Constraints\GroupSequence)[]** | The groups to normalize |

**Return Value:**

A group array



***

### validateObject

Validates an object against the constraints defined for its class.

```php
private validateObject(object $object, string $propertyPath, (string|\Symfony\Component\Validator\Constraints\GroupSequence)[] $groups, int $traversalStrategy, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

If no metadata is available for the class, but the class is an instance of {@link} and the selected traversal strategy
allows traversal, the object will be iterated and each nested object will be validated instead.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** | The object to cascade |
| `$propertyPath` | **string** | The current property path |
| `$groups` | **(string&#124;\Symfony\Component\Validator\Constraints\GroupSequence)[]** | The validated groups |
| `$traversalStrategy` | **int** | The strategy for traversing the<br />cascaded object |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The current execution context |

***

### validateEachObjectIn

Validates each object in a collection against the constraints defined for their classes.

```php
private validateEachObjectIn(iterable $collection, string $propertyPath, (string|\Symfony\Component\Validator\Constraints\GroupSequence)[] $groups, bool $stopRecursion, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

If the parameter $recursive is set to true, nested {@link} objects are iterated as well. Nested arrays are always
iterated, regardless of the value of $recursive.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **iterable** | The collection |
| `$propertyPath` | **string** | The current property path |
| `$groups` | **(string&#124;\Symfony\Component\Validator\Constraints\GroupSequence)[]** | The validated groups |
| `$stopRecursion` | **
bool** | Whether to disable<br />recursive iteration. For<br />backwards compatibility<br />with Symfony &lt; 2.5. |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The current execution context |

**See Also:**

* \Symfony\Component\Validator\Validator\ClassNode - * \Symfony\Component\Validator\Validator\CollectionNode -

***

### validateClassNode

Validates a class node.

```php
private validateClassNode(object $object, string $cacheKey, \Symfony\Component\Validator\Mapping\ClassMetadataInterface $metadata = null, string $propertyPath, (string|\Symfony\Component\Validator\Constraints\GroupSequence)[] $groups, string[]|null $cascadedGroups, int $traversalStrategy, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

A class node is a combination of an object with a {@link} instance. Each class node (conceptionally) has zero or more
succeeding property nodes:

    (Article:class node)
               \
       ($title:property node)

This method validates the passed objects against all constraints defined at class level. It furthermore triggers the
validation of each of the class' properties against the constraints for that property.

If the selected traversal strategy allows traversal, the object is iterated and each nested object is validated against
its own constraints. The object is not traversed if traversal is disabled in the class metadata.

If the passed groups contain the group "Default", the validator will check whether the "Default" group has been replaced
by a group sequence in the class metadata. If this is the case, the group sequence is validated instead.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** | The validated object |
| `$cacheKey` | **string** | The key for caching<br />the validated object |
| `$metadata` | **
\Symfony\Component\Validator\Mapping\ClassMetadataInterface** | The class metadata of<br />the object |
| `$propertyPath` | **string** | The property path leading<br />to the object |
| `$groups` | **(
string&#124;\Symfony\Component\Validator\Constraints\GroupSequence)[]** | The groups in which the<br />object should be validated |
| `$cascadedGroups` | **string[]&#124;null** | The groups in which<br />cascaded objects should<br />be validated |
| `$traversalStrategy` | **int** | The strategy used for<br />traversing the object |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The current execution context |

**See Also:**

* \Symfony\Component\Validator\Mapping\TraversalStrategy -

***

### validateGenericNode

Validates a node that is not a class node.

```php
private validateGenericNode(mixed $value, object|null $object, string $cacheKey, \Symfony\Component\Validator\Mapping\MetadataInterface $metadata = null, string $propertyPath, (string|\Symfony\Component\Validator\Constraints\GroupSequence)[] $groups, string[]|null $cascadedGroups, int $traversalStrategy, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

Currently, two such node types exist:

- property nodes, which consist of the value of an object's property together with a {@link} instance
- generic nodes, which consist of a value and some arbitrary constraints defined in a {@link} container

In both cases, the value is validated against all constraints defined in the passed metadata object. Then, if the value
is an instance of {@link} and the selected traversal strategy permits it, the value is traversed and each nested object
validated against its own constraints. Arrays are always traversed.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The validated value |
| `$object` | **object&#124;null** | The current object |
| `$cacheKey` | **string** | The key for caching<br />the validated value |
| `$metadata` | **\Symfony\Component\Validator\Mapping\MetadataInterface** | The metadata of the<br />value |
| `$propertyPath` | **string** | The property path leading<br />to the value |
| `$groups` | **(
string&#124;\Symfony\Component\Validator\Constraints\GroupSequence)[]** | The groups in which the<br />value should be validated |
| `$cascadedGroups` | **string[]&#124;null** | The groups in which<br />cascaded objects should<br />be validated |
| `$traversalStrategy` | **int** | The strategy used for<br />traversing the value |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The current execution context |

**See Also:**

* \Symfony\Component\Validator\Mapping\TraversalStrategy -

***

### stepThroughGroupSequence

Sequentially validates a node's value in each group of a group sequence.

```php
private stepThroughGroupSequence(mixed $value, object|null $object, string $cacheKey, \Symfony\Component\Validator\Mapping\MetadataInterface $metadata = null, string $propertyPath, int $traversalStrategy, \Symfony\Component\Validator\Constraints\GroupSequence $groupSequence, string|null $cascadedGroup, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

If any of the constraints generates a violation, subsequent groups in the group sequence are skipped.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The validated value |
| `$object` | **object&#124;null** | The current object |
| `$cacheKey` | **string** | The key for caching<br />the validated value |
| `$metadata` | **\Symfony\Component\Validator\Mapping\MetadataInterface** | The metadata of the<br />value |
| `$propertyPath` | **string** | The property path leading<br />to the value |
| `$traversalStrategy` | **int** | The strategy used for<br />traversing the value |
| `$groupSequence` | **\Symfony\Component\Validator\Constraints\GroupSequence** | The group sequence |
| `$cascadedGroup` | **
string&#124;null** | The group that should<br />be passed to cascaded<br />objects instead of<br />the group sequence |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The execution context |

***

### validateInGroup

Validates a node's value against all constraints in the given group.

```php
private validateInGroup(mixed $value, string $cacheKey, \Symfony\Component\Validator\Mapping\MetadataInterface $metadata, string $group, \Symfony\Component\Validator\Context\ExecutionContextInterface $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The validated value |
| `$cacheKey` | **string** | The key for caching the<br />validated value |
| `$metadata` | **\Symfony\Component\Validator\Mapping\MetadataInterface** | The metadata of the value |
| `$group` | **string** | The group to validate |
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** | The execution context |

yxorP::get('REQUEST')
