***

# ConstraintValidatorFactory

Default implementation of the ConstraintValidatorFactoryInterface.

This enforces the convention that the validatedBy() method on any
Constraint will return the class name of the ConstraintValidator that
should validate the Constraint.

* Full name: `\Symfony\Component\Validator\ConstraintValidatorFactory`
* This class implements:
[`\Symfony\Component\Validator\ConstraintValidatorFactoryInterface`](./ConstraintValidatorFactoryInterface.md)



## Properties


### validators



```php
protected $validators
```






***

### propertyAccessor



```php
private $propertyAccessor
```






***

## Methods


### __construct



```php
public __construct(mixed $propertyAccessor = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyAccessor` | **mixed** |  |




***

### getInstance

Given a Constraint, this returns the ConstraintValidatorInterface
object that should be used to verify its validity.

```php
public getInstance(\Symfony\Component\Validator\Constraint $constraint): \Symfony\Component\Validator\ConstraintValidatorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$constraint` | **\Symfony\Component\Validator\Constraint** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
