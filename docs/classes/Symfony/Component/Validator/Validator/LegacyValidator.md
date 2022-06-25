***

# LegacyValidator

A validator that supports both the API of Symfony < 2.5 and Symfony 2.5+.



* Full name: `\Symfony\Component\Validator\Validator\LegacyValidator`
* Parent class: [`\Symfony\Component\Validator\Validator\RecursiveValidator`](./RecursiveValidator.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

**See Also:**

* \Symfony\Component\Validator\ValidatorInterface - 
* \Symfony\Component\Validator\Validator\ValidatorInterface - 






## Inherited methods


### __construct

Creates a new validator.

```php
public __construct(\Symfony\Component\Validator\Context\ExecutionContextFactoryInterface $contextFactory, \Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, \Symfony\Component\Validator\ConstraintValidatorFactoryInterface $validatorFactory, \Symfony\Component\Validator\ObjectInitializerInterface[] $objectInitializers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contextFactory` | **\Symfony\Component\Validator\Context\ExecutionContextFactoryInterface** | The factory for<br />creating new contexts |
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** | The factory for<br />fetching the metadata<br />of validated objects |
| `$validatorFactory` | **\Symfony\Component\Validator\ConstraintValidatorFactoryInterface** | The factory for creating<br />constraint validators |
| `$objectInitializers` | **\Symfony\Component\Validator\ObjectInitializerInterface[]** | The object initializers |




***

### startContext

Starts a new validation context and returns a validator for that context.

```php
public startContext(mixed $root = null): \Symfony\Component\Validator\Validator\ContextualValidatorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **mixed** |  |


**Return Value:**

The validator for the new context



***

### inContext

Returns a validator in the given execution context.

```php
public inContext(\Symfony\Component\Validator\Context\ExecutionContextInterface $context): \Symfony\Component\Validator\Validator\ContextualValidatorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Symfony\Component\Validator\Context\ExecutionContextInterface** |  |


**Return Value:**

The validator for that context



***

### getMetadataFor

{@inheritdoc}

```php
public getMetadataFor(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### hasMetadataFor

{@inheritdoc}

```php
public hasMetadataFor(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### validate

Validates a value against a constraint or a list of constraints.

```php
public validate(mixed $value, mixed $groups = null, mixed $traverse = false, mixed $deep = false): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |
| `$traverse` | **mixed** |  |
| `$deep` | **mixed** |  |


**Return Value:**

A list of constraint violations
If the list is empty, validation
succeeded



***

### validateProperty

Validates a property of an object against the constraints specified
for this property.

```php
public validateProperty(mixed $object, mixed $propertyName, mixed $groups = null): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** | The object |
| `$propertyName` | **mixed** | The name of the validated property |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |


**Return Value:**

A list of constraint violations
If the list is empty, validation
succeeded



***

### validatePropertyValue

Validates a value against the constraints specified for an object's
property.

```php
public validatePropertyValue(mixed $objectOrClass, mixed $propertyName, mixed $value, mixed $groups = null): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectOrClass` | **mixed** | The object or its class name |
| `$propertyName` | **mixed** | The name of the property |
| `$value` | **mixed** | The value to validate against the property&#039;s constraints |
| `$groups` | **mixed** | The validation groups to validate. If none is given, &quot;Default&quot; is assumed |


**Return Value:**

A list of constraint violations
If the list is empty, validation
succeeded



***

### validateValue

Validates a value against a constraint or a list of constraints.

```php
public validateValue(mixed $value, mixed $constraints, mixed $groups = null): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |
| `$constraints` | **mixed** | The constraint(s) to validate against |
| `$groups` | **mixed** | The validation groups to validate |


**Return Value:**

A list of constraint violations. If the
list is empty, validation succeeded.



***

### getMetadataFactory

Returns the factory for metadata instances.

```php
public getMetadataFactory(): \Symfony\Component\Validator\MetadataFactoryInterface
```









**Return Value:**

The metadata factory



***

### testConstraints



```php
private static testConstraints(mixed $constraints): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constraints` | **mixed** |  |




***

### testGroups



```php
private static testGroups(mixed $groups): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
