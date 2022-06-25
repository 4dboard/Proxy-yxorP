***

# LegacyValidator2Dot5ApiTest

Verifies that a validator satisfies the API of Symfony 2.5+.

* Full name: `\Symfony\Component\Validator\Tests\Validator\LegacyValidator2Dot5ApiTest`
* Parent class: [`\Symfony\Component\Validator\Tests\Validator\Abstract2Dot5ApiTest`](./Abstract2Dot5ApiTest.md)

## Methods

### createValidator

```php
protected createValidator(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, array $objectInitializers = array()): \Symfony\Component\Validator\Validator\ValidatorInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** |  |
| `$objectInitializers` | **array** |  |

***

## Inherited methods

### createValidator

```php
protected createValidator(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, array $objectInitializers = array()): \Symfony\Component\Validator\Validator\ValidatorInterface
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

### testValidateConstraintWithoutGroup

```php
public testValidateConstraintWithoutGroup(): mixed
```

***

### testValidateWithEmptyArrayAsConstraint

```php
public testValidateWithEmptyArrayAsConstraint(): mixed
```

***

### testGroupSequenceAbortsAfterFailedGroup

```php
public testGroupSequenceAbortsAfterFailedGroup(): mixed
```

***

### testGroupSequenceIncludesReferences

```php
public testGroupSequenceIncludesReferences(): mixed
```

***

### testValidateInSeparateContext

```php
public testValidateInSeparateContext(): mixed
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

### testTraverseTraversableByDefault

```php
public testTraverseTraversableByDefault(): mixed
```

***

### testTraversalEnabledOnClass

```php
public testTraversalEnabledOnClass(): mixed
```

***

### testTraversalDisabledOnClass

```php
public testTraversalDisabledOnClass(): mixed
```

***

### testExpectTraversableIfTraversalEnabledOnClass

```php
public testExpectTraversableIfTraversalEnabledOnClass(): mixed
```

***

### testReferenceTraversalDisabledOnClass

```php
public testReferenceTraversalDisabledOnClass(): mixed
```

***

### testReferenceTraversalEnabledOnReferenceDisabledOnClass

```php
public testReferenceTraversalEnabledOnReferenceDisabledOnClass(): mixed
```

***

### testReferenceTraversalDisabledOnReferenceEnabledOnClass

```php
public testReferenceTraversalDisabledOnReferenceEnabledOnClass(): mixed
```

***

### testAddCustomizedViolation

```php
public testAddCustomizedViolation(): mixed
```

***

### testMetadataMustImplementClassMetadataInterface

```php
public testMetadataMustImplementClassMetadataInterface(): mixed
```

***

### testReferenceMetadataMustImplementClassMetadataInterface

```php
public testReferenceMetadataMustImplementClassMetadataInterface(): mixed
```

***

### testLegacyPropertyMetadataMustImplementPropertyMetadataInterface

```php
public testLegacyPropertyMetadataMustImplementPropertyMetadataInterface(): mixed
```

***

### testNoDuplicateValidationIfClassConstraintInMultipleGroups

```php
public testNoDuplicateValidationIfClassConstraintInMultipleGroups(): mixed
```

***

### testNoDuplicateValidationIfPropertyConstraintInMultipleGroups

```php
public testNoDuplicateValidationIfPropertyConstraintInMultipleGroups(): mixed
```

***

### testValidateFailsIfNoConstraintsAndNoObjectOrArray

```php
public testValidateFailsIfNoConstraintsAndNoObjectOrArray(): mixed
```

***

### testAccessCurrentObject

```php
public testAccessCurrentObject(): mixed
```

***

### testInitializeObjectsOnFirstValidation

```php
public testInitializeObjectsOnFirstValidation(): mixed
```

***

### testPassConstraintToViolation

```php
public testPassConstraintToViolation(): mixed
```

***

### testCollectionConstraitViolationHasCorrectContext

```php
public testCollectionConstraitViolationHasCorrectContext(): mixed
```

***

### tearDown

```php
protected tearDown(): mixed
```

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
