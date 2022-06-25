***

# ClassMetadataTest

* Full name: `\Symfony\Component\Validator\Tests\Mapping\ClassMetadataTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CLASSNAME`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity&#039;|
|`PARENTCLASS`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent&#039;|
|`PROVIDERCLASS`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity&#039;|
|`PROVIDERCHILDCLASS`|public| |&#039;Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderChildEntity&#039;|

## Properties

### metadata

```php
protected $metadata
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

### testAddConstraintDoesNotAcceptValid

```php
public testAddConstraintDoesNotAcceptValid(): mixed
```

***

### testAddConstraintRequiresClassConstraints

```php
public testAddConstraintRequiresClassConstraints(): mixed
```

***

### testAddPropertyConstraints

```php
public testAddPropertyConstraints(): mixed
```

***

### testAddMultiplePropertyConstraints

```php
public testAddMultiplePropertyConstraints(): mixed
```

***

### testAddGetterConstraints

```php
public testAddGetterConstraints(): mixed
```

***

### testAddMultipleGetterConstraints

```php
public testAddMultipleGetterConstraints(): mixed
```

***

### testMergeConstraintsMergesClassConstraints

```php
public testMergeConstraintsMergesClassConstraints(): mixed
```

***

### testMergeConstraintsMergesMemberConstraints

```php
public testMergeConstraintsMergesMemberConstraints(): mixed
```

***

### testMemberMetadatas

```php
public testMemberMetadatas(): mixed
```

***

### testMergeConstraintsKeepsPrivateMembersSeparate

```php
public testMergeConstraintsKeepsPrivateMembersSeparate(): mixed
```

***

### testGetReflectionClass

```php
public testGetReflectionClass(): mixed
```

***

### testSerialize

```php
public testSerialize(): mixed
```

***

### testGroupSequencesWorkIfContainingDefaultGroup

```php
public testGroupSequencesWorkIfContainingDefaultGroup(): mixed
```

***

### testGroupSequencesFailIfNotContainingDefaultGroup

```php
public testGroupSequencesFailIfNotContainingDefaultGroup(): mixed
```

***

### testGroupSequencesFailIfContainingDefault

```php
public testGroupSequencesFailIfContainingDefault(): mixed
```

***

### testGroupSequenceFailsIfGroupSequenceProviderIsSet

```php
public testGroupSequenceFailsIfGroupSequenceProviderIsSet(): mixed
```

***

### testGroupSequenceProviderFailsIfGroupSequenceIsSet

```php
public testGroupSequenceProviderFailsIfGroupSequenceIsSet(): mixed
```

***

### testGroupSequenceProviderFailsIfDomainClassIsInvalid

```php
public testGroupSequenceProviderFailsIfDomainClassIsInvalid(): mixed
```

***

### testGroupSequenceProvider

```php
public testGroupSequenceProvider(): mixed
```

***

### testMergeConstraintsMergesGroupSequenceProvider

```php
public testMergeConstraintsMergesGroupSequenceProvider(): mixed
```

***

### testGetPropertyMetadataReturnsEmptyArrayWithoutConfiguredMetadata

https://github.com/symfony/symfony/issues/11604.

```php
public testGetPropertyMetadataReturnsEmptyArrayWithoutConfiguredMetadata(): mixed
```

yxorP::get('REQUEST')
