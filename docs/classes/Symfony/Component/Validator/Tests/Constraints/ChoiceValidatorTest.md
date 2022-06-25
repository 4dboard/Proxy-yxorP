***

# ChoiceValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Constraints\ChoiceValidatorTest`
* Parent
  class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest`](./AbstractConstraintValidatorTest.md)

## Methods

### getApiVersion

```php
protected getApiVersion(): mixed
```

***

### createValidator

```php
protected createValidator(): mixed
```

***

### staticCallback

```php
public static staticCallback(): mixed
```

* This method is **static**.

***

### testExpectArrayIfMultipleIsTrue

```php
public testExpectArrayIfMultipleIsTrue(): mixed
```

***

### testNullIsValid

```php
public testNullIsValid(): mixed
```

***

### testChoicesOrCallbackExpected

```php
public testChoicesOrCallbackExpected(): mixed
```

***

### testValidCallbackExpected

```php
public testValidCallbackExpected(): mixed
```

***

### testValidChoiceArray

```php
public testValidChoiceArray(): mixed
```

***

### testValidChoiceCallbackFunction

```php
public testValidChoiceCallbackFunction(): mixed
```

***

### testValidChoiceCallbackClosure

```php
public testValidChoiceCallbackClosure(): mixed
```

***

### testValidChoiceCallbackStaticMethod

```php
public testValidChoiceCallbackStaticMethod(): mixed
```

***

### testValidChoiceCallbackContextMethod

```php
public testValidChoiceCallbackContextMethod(): mixed
```

***

### testMultipleChoices

```php
public testMultipleChoices(): mixed
```

***

### testInvalidChoice

```php
public testInvalidChoice(): mixed
```

***

### testInvalidChoiceEmptyChoices

```php
public testInvalidChoiceEmptyChoices(): mixed
```

***

### testInvalidChoiceMultiple

```php
public testInvalidChoiceMultiple(): mixed
```

***

### testTooFewChoices

```php
public testTooFewChoices(): mixed
```

***

### testTooManyChoices

```php
public testTooManyChoices(): mixed
```

***

### testNonStrict

```php
public testNonStrict(): mixed
```

***

### testStrictAllowsExactValue

```php
public testStrictAllowsExactValue(): mixed
```

***

### testStrictDisallowsDifferentType

```php
public testStrictDisallowsDifferentType(): mixed
```

***

### testNonStrictWithMultipleChoices

```php
public testNonStrictWithMultipleChoices(): mixed
```

***

### testStrictWithMultipleChoices

```php
public testStrictWithMultipleChoices(): mixed
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

### setDefaultTimezone

```php
protected setDefaultTimezone(mixed $defaultTimezone): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultTimezone` | **mixed** |  |

***

### restoreDefaultTimezone

```php
protected restoreDefaultTimezone(): mixed
```

***

### createContext

```php
protected createContext(): mixed
```

***

### createViolation

```php
protected createViolation(mixed $message, array $parameters = array(), string $propertyPath = &#039;property.path&#039;, string $invalidValue = &#039;InvalidValue&#039;, null $plural = null, null $code = null): \Symfony\Component\Validator\ConstraintViolation
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$parameters` | **array** |  |
| `$propertyPath` | **string** |  |
| `$invalidValue` | **string** |  |
| `$plural` | **null** |  |
| `$code` | **null** |  |

***

### setGroup

```php
protected setGroup(mixed $group): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |

***

### setObject

```php
protected setObject(mixed $object): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

***

### setProperty

```php
protected setProperty(mixed $object, mixed $property): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$property` | **mixed** |  |

***

### setValue

```php
protected setValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### setRoot

```php
protected setRoot(mixed $root): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **mixed** |  |

***

### setPropertyPath

```php
protected setPropertyPath(mixed $propertyPath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyPath` | **mixed** |  |

***

### expectNoValidate

```php
protected expectNoValidate(): mixed
```

***

### expectValidateAt

```php
protected expectValidateAt(mixed $i, mixed $propertyPath, mixed $value, mixed $group): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **mixed** |  |
| `$propertyPath` | **mixed** |  |
| `$value` | **mixed** |  |
| `$group` | **mixed** |  |

***

### expectValidateValueAt

```php
protected expectValidateValueAt(mixed $i, mixed $propertyPath, mixed $value, mixed $constraints, mixed $group = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **mixed** |  |
| `$propertyPath` | **mixed** |  |
| `$value` | **mixed** |  |
| `$constraints` | **mixed** |  |
| `$group` | **mixed** |  |

***

### assertNoViolation

```php
protected assertNoViolation(): mixed
```

***

### assertViolation

```php
protected assertViolation(mixed $message, array $parameters = array(), string $propertyPath = &#039;property.path&#039;, string $invalidValue = &#039;InvalidValue&#039;, null $plural = null, null $code = null): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$parameters` | **array** |  |
| `$propertyPath` | **string** |  |
| `$invalidValue` | **string** |  |
| `$plural` | **null** |  |
| `$code` | **null** |  |

***

### assertViolations

```php
protected assertViolations(array $expected): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **array** |  |

***

### buildViolation

```php
protected buildViolation( $message): \Symfony\Component\Validator\Tests\Constraints\ConstraintViolationAssertion
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **** |  |

***

### getApiVersion

```php
protected getApiVersion(): mixed
```

***

### createValidator

```php
protected createValidator(): mixed
```

* This method is **abstract**.

yxorP::get('REQUEST')
