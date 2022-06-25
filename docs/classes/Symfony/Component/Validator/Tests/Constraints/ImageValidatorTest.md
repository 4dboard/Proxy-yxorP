***

# ImageValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Constraints\ImageValidatorTest`
* Parent
  class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest`](./AbstractConstraintValidatorTest.md)

## Properties

### context

```php
protected \Symfony\Component\Validator\Context\ExecutionContextInterface $context
```

***

### validator

```php
protected \Symfony\Component\Validator\Constraints\ImageValidator $validator
```

***

### path

```php
protected $path
```

***

### image

```php
protected $image
```

***

### imageLandscape

```php
protected $imageLandscape
```

***

### imagePortrait

```php
protected $imagePortrait
```

***

### image4By3

```php
protected $image4By3
```

***

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

### setUp

```php
protected setUp(): mixed
```

***

### testNullIsValid

```php
public testNullIsValid(): mixed
```

***

### testEmptyStringIsValid

```php
public testEmptyStringIsValid(): mixed
```

***

### testValidImage

```php
public testValidImage(): mixed
```

***

### testFileNotFound

```php
public testFileNotFound(): mixed
```

***

### testValidSize

```php
public testValidSize(): mixed
```

***

### testWidthTooSmall

```php
public testWidthTooSmall(): mixed
```

***

### testWidthTooBig

```php
public testWidthTooBig(): mixed
```

***

### testHeightTooSmall

```php
public testHeightTooSmall(): mixed
```

***

### testHeightTooBig

```php
public testHeightTooBig(): mixed
```

***

### testInvalidMinWidth

```php
public testInvalidMinWidth(): mixed
```

***

### testInvalidMaxWidth

```php
public testInvalidMaxWidth(): mixed
```

***

### testInvalidMinHeight

```php
public testInvalidMinHeight(): mixed
```

***

### testInvalidMaxHeight

```php
public testInvalidMaxHeight(): mixed
```

***

### testRatioTooSmall

```php
public testRatioTooSmall(): mixed
```

***

### testRatioTooBig

```php
public testRatioTooBig(): mixed
```

***

### testMaxRatioUsesTwoDecimalsOnly

```php
public testMaxRatioUsesTwoDecimalsOnly(): mixed
```

***

### testInvalidMinRatio

```php
public testInvalidMinRatio(): mixed
```

***

### testInvalidMaxRatio

```php
public testInvalidMaxRatio(): mixed
```

***

### testSquareNotAllowed

```php
public testSquareNotAllowed(): mixed
```

***

### testLandscapeNotAllowed

```php
public testLandscapeNotAllowed(): mixed
```

***

### testPortraitNotAllowed

```php
public testPortraitNotAllowed(): mixed
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
