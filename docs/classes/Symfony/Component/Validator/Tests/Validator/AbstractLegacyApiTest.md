***

# AbstractLegacyApiTest

Verifies that a validator satisfies the API of Symfony < 2.5.



* Full name: `\Symfony\Component\Validator\Tests\Validator\AbstractLegacyApiTest`
* Parent class: [`\Symfony\Component\Validator\Tests\Validator\AbstractValidatorTest`](./AbstractValidatorTest.md)
* This class is an **Abstract class**



## Properties


### validator



```php
protected \Symfony\Component\Validator\ValidatorInterface $validator
```






***

## Methods


### createValidator



```php
protected createValidator(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, array $objectInitializers = array()): \Symfony\Component\Validator\ValidatorInterface
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** |  |
| `$objectInitializers` | **array** |  |




***

### setUp



```php
protected setUp(): mixed
```











***

### validate



```php
protected validate(mixed $value, mixed $constraints = null, mixed $groups = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$constraints` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### validateProperty



```php
protected validateProperty(mixed $object, mixed $propertyName, mixed $groups = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$propertyName` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### validatePropertyValue



```php
protected validatePropertyValue(mixed $object, mixed $propertyName, mixed $value, mixed $groups = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$propertyName` | **mixed** |  |
| `$value` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### testTraversableTraverseDisabled



```php
public testTraversableTraverseDisabled(): mixed
```











***

### testRecursiveTraversableRecursiveTraversalDisabled



```php
public testRecursiveTraversableRecursiveTraversalDisabled(): mixed
```











***

### testValidateInContext



```php
public testValidateInContext(): mixed
```











***

### testValidateArrayInContext



```php
public testValidateArrayInContext(): mixed
```











***

### testAddCustomizedViolation



```php
public testAddCustomizedViolation(): mixed
```











***

### testInitializeObjectsOnFirstValidation



```php
public testInitializeObjectsOnFirstValidation(): mixed
```











***

### testGetMetadataFactory



```php
public testGetMetadataFactory(): mixed
```











***


## Inherited methods


### setUp



```php
protected setUp(): mixed
```











***

### tearDown



```php
protected tearDown(): mixed
```











***

### validate



```php
protected validate(mixed $value, mixed $constraints = null, mixed $groups = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$constraints` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### validateProperty



```php
protected validateProperty(mixed $object, mixed $propertyName, mixed $groups = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$propertyName` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### validatePropertyValue



```php
protected validatePropertyValue(mixed $object, mixed $propertyName, mixed $value, mixed $groups = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$propertyName` | **mixed** |  |
| `$value` | **mixed** |  |
| `$groups` | **mixed** |  |




***

### testValidate



```php
public testValidate(): mixed
```











***

### testClassConstraint



```php
public testClassConstraint(): mixed
```











***

### testPropertyConstraint



```php
public testPropertyConstraint(): mixed
```











***

### testGetterConstraint



```php
public testGetterConstraint(): mixed
```











***

### testArray



```php
public testArray(): mixed
```











***

### testRecursiveArray



```php
public testRecursiveArray(): mixed
```











***

### testTraversable



```php
public testTraversable(): mixed
```











***

### testRecursiveTraversable



```php
public testRecursiveTraversable(): mixed
```











***

### testReferenceClassConstraint



```php
public testReferenceClassConstraint(): mixed
```











***

### testReferencePropertyConstraint



```php
public testReferencePropertyConstraint(): mixed
```











***

### testReferenceGetterConstraint



```php
public testReferenceGetterConstraint(): mixed
```











***

### testsIgnoreNullReference



```php
public testsIgnoreNullReference(): mixed
```











***

### testFailOnScalarReferences



```php
public testFailOnScalarReferences(): mixed
```











***

### testArrayReference



```php
public testArrayReference(): mixed
```











***

### testRecursiveArrayReference



```php
public testRecursiveArrayReference(): mixed
```











***

### testArrayTraversalCannotBeDisabled



```php
public testArrayTraversalCannotBeDisabled(): mixed
```











***

### testRecursiveArrayTraversalCannotBeDisabled



```php
public testRecursiveArrayTraversalCannotBeDisabled(): mixed
```











***

### testIgnoreScalarsDuringArrayTraversal



```php
public testIgnoreScalarsDuringArrayTraversal(): mixed
```











***

### testIgnoreNullDuringArrayTraversal



```php
public testIgnoreNullDuringArrayTraversal(): mixed
```











***

### testTraversableReference



```php
public testTraversableReference(): mixed
```











***

### testDisableTraversableTraversal



```php
public testDisableTraversableTraversal(): mixed
```











***

### testMetadataMustExistIfTraversalIsDisabled



```php
public testMetadataMustExistIfTraversalIsDisabled(): mixed
```











***

### testEnableRecursiveTraversableTraversal



```php
public testEnableRecursiveTraversableTraversal(): mixed
```











***

### testValidateProperty



```php
public testValidateProperty(): mixed
```











***

### testLegacyValidatePropertyFailsIfPropertiesNotSupported

Cannot be UnsupportedMetadataException for BC with Symfony < 2.5.

```php
public testLegacyValidatePropertyFailsIfPropertiesNotSupported(): mixed
```











***

### testValidatePropertyWithoutConstraints

https://github.com/symfony/symfony/issues/11604.

```php
public testValidatePropertyWithoutConstraints(): mixed
```











***

### testValidatePropertyValue



```php
public testValidatePropertyValue(): mixed
```











***

### testValidatePropertyValueWithClassName



```php
public testValidatePropertyValueWithClassName(): mixed
```











***

### testLegacyValidatePropertyValueFailsIfPropertiesNotSupported

Cannot be UnsupportedMetadataException for BC with Symfony < 2.5.

```php
public testLegacyValidatePropertyValueFailsIfPropertiesNotSupported(): mixed
```











***

### testValidatePropertyValueWithoutConstraints

https://github.com/symfony/symfony/issues/11604.

```php
public testValidatePropertyValueWithoutConstraints(): mixed
```











***

### testValidateObjectOnlyOncePerGroup



```php
public testValidateObjectOnlyOncePerGroup(): mixed
```











***

### testValidateDifferentObjectsSeparately



```php
public testValidateDifferentObjectsSeparately(): mixed
```











***

### testValidateSingleGroup



```php
public testValidateSingleGroup(): mixed
```











***

### testValidateMultipleGroups



```php
public testValidateMultipleGroups(): mixed
```











***

### testReplaceDefaultGroupByGroupSequenceObject



```php
public testReplaceDefaultGroupByGroupSequenceObject(): mixed
```











***

### testReplaceDefaultGroupByGroupSequenceArray



```php
public testReplaceDefaultGroupByGroupSequenceArray(): mixed
```











***

### testPropagateDefaultGroupToReferenceWhenReplacingDefaultGroup



```php
public testPropagateDefaultGroupToReferenceWhenReplacingDefaultGroup(): mixed
```











***

### testValidateCustomGroupWhenDefaultGroupWasReplaced



```php
public testValidateCustomGroupWhenDefaultGroupWasReplaced(): mixed
```











***

### testReplaceDefaultGroupWithObjectFromGroupSequenceProvider



```php
public testReplaceDefaultGroupWithObjectFromGroupSequenceProvider(): mixed
```











***

### testReplaceDefaultGroupWithArrayFromGroupSequenceProvider



```php
public testReplaceDefaultGroupWithArrayFromGroupSequenceProvider(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
