***

# Validation

Entry point for the Validator component.

* Full name: `\Symfony\Component\Validator\Validation`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`API_VERSION_2_4`|public| |1|
|`API_VERSION_2_5`|public| |2|
|`API_VERSION_2_5_BC`|public| |3|

## Methods

### createValidator

Creates a new validator.

```php
public static createValidator(): \Symfony\Component\Validator\ValidatorInterface
```

If you want to configure the validator, use {@link} instead.

* This method is **static**.

**Return Value:**

The new validator



***

### createValidatorBuilder

Creates a configurable builder for validator objects.

```php
public static createValidatorBuilder(): \Symfony\Component\Validator\ValidatorBuilderInterface
```

* This method is **static**.

**Return Value:**

The new builder



***

### __construct

This class cannot be instantiated.

```php
private __construct(): mixed
```

yxorP::get('REQUEST')
