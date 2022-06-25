***

# AbstractValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Validator\AbstractValidatorTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ENTITY_CLASS`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity&#039;|
|`REFERENCE_CLASS`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\Reference&#039;|

## Properties

### metadataFactory

```php
public \Symfony\Component\Validator\Tests\Fixtures\FakeMetadataFactory $metadataFactory
```

***

### metadata

```php
public \Symfony\Component\Validator\Mapping\ClassMetadata $metadata
```

***

### referenceMetadata

```php
public \Symfony\Component\Validator\Mapping\ClassMetadata $referenceMetadata
```

***

## Methods

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

yxorP::get('REQUEST')
