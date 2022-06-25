***

# Validator

Default implementation of {@link ValidatorInterface}.



* Full name: `\Symfony\Component\Validator\Validator`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Symfony\Component\Validator\ValidatorInterface`](./ValidatorInterface.md), [`\Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface`](./Mapping/Factory/MetadataFactoryInterface.md)



## Properties


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

### translator



```php
private $translator
```






***

### translationDomain



```php
private $translationDomain
```






***

### objectInitializers



```php
private $objectInitializers
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, \Symfony\Component\Validator\ConstraintValidatorFactoryInterface $validatorFactory, \Symfony\Component\Translation\TranslatorInterface $translator, mixed $translationDomain = &#039;validators&#039;, array $objectInitializers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** |  |
| `$validatorFactory` | **\Symfony\Component\Validator\ConstraintValidatorFactoryInterface** |  |
| `$translator` | **\Symfony\Component\Translation\TranslatorInterface** |  |
| `$translationDomain` | **mixed** |  |
| `$objectInitializers` | **array** |  |




***

### getMetadataFactory

Returns the factory for metadata instances.

```php
public getMetadataFactory(): \Symfony\Component\Validator\MetadataFactoryInterface
```









**Return Value:**

The metadata factory



***

### getMetadataFor

{@inheritdoc}

```php
public getMetadataFor(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### hasMetadataFor

{@inheritdoc}

```php
public hasMetadataFor(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### validate

Validates a value.

```php
public validate(mixed $value, mixed $groups = null, mixed $traverse = false, mixed $deep = false): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |
| `$groups` | **mixed** | The validation groups to validate |
| `$traverse` | **mixed** | Whether to traverse the value if it is traversable |
| `$deep` | **mixed** | Whether to traverse nested traversable values recursively |


**Return Value:**

A list of constraint violations. If the
list is empty, validation succeeded.



***

### validateProperty

Validates a property of a value against its current value.

```php
public validateProperty(mixed $containingValue, mixed $property, mixed $groups = null): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$containingValue` | **mixed** | The value containing the property |
| `$property` | **mixed** | The name of the property to validate |
| `$groups` | **mixed** | The validation groups to validate |


**Return Value:**

A list of constraint violations. If the
list is empty, validation succeeded.



***

### validatePropertyValue

Validate a property of a value against a potential value.

```php
public validatePropertyValue(mixed $containingValue, mixed $property, mixed $value, mixed $groups = null): \Symfony\Component\Validator\ConstraintViolationListInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$containingValue` | **mixed** | The value containing the property |
| `$property` | **mixed** | The name of the property to validate |
| `$value` | **mixed** | The value to validate against the<br />constraints of the property |
| `$groups` | **mixed** | The validation groups to validate |


**Return Value:**

A list of constraint violations. If the
list is empty, validation succeeded.



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

### createVisitor



```php
private createVisitor(mixed $root): \Symfony\Component\Validator\ValidationVisitor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **mixed** |  |




***

### resolveGroups



```php
private resolveGroups(string|string[]|null $groups): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **string&#124;string[]&#124;null** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
