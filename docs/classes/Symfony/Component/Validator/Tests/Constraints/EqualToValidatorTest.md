***

# EqualToValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Constraints\EqualToValidatorTest`
* Parent
  class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractComparisonValidatorTestCase`](./AbstractComparisonValidatorTestCase.md)

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

### createConstraint

```php
protected createConstraint(array $options = null): \Symfony\Component\Validator\Constraint
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Options for the constraint |

***

### getErrorCode

```php
protected getErrorCode(): string|null
```

***

### provideValidComparisons

```php
public provideValidComparisons(): array
```

***

### provideInvalidComparisons

```php
public provideInvalidComparisons(): array
```

***

## Inherited methods

### addPhp5Dot5Comparisons

```php
protected static addPhp5Dot5Comparisons(array $comparisons): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comparisons` | **array** |  |

***

### provideInvalidConstraintOptions

```php
public provideInvalidConstraintOptions(): mixed
```

***

### testThrowsConstraintExceptionIfNoValueOrProperty

```php
public testThrowsConstraintExceptionIfNoValueOrProperty(mixed $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |

***

### testValidComparisonToValue

```php
public testValidComparisonToValue(mixed $dirtyValue, mixed $comparisonValue): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirtyValue` | **mixed** |  |
| `$comparisonValue` | **mixed** |  |

***

### provideAllValidComparisons

```php
public provideAllValidComparisons(): array
```

***

### provideValidComparisons

```php
public provideValidComparisons(): array
```

* This method is **abstract**.

***

### testInvalidComparisonToValue

```php
public testInvalidComparisonToValue(mixed $dirtyValue, mixed $dirtyValueAsString, mixed $comparedValue, mixed $comparedValueString, string $comparedValueType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirtyValue` | **mixed** |  |
| `$dirtyValueAsString` | **mixed** |  |
| `$comparedValue` | **mixed** |  |
| `$comparedValueString` | **mixed** |  |
| `$comparedValueType` | **string** |  |

***

### provideAllInvalidComparisons

```php
public provideAllInvalidComparisons(): array
```

***

### provideInvalidComparisons

```php
public provideInvalidComparisons(): array
```

* This method is **abstract**.

***

### createConstraint

```php
protected createConstraint(array|null $options = null): \Symfony\Component\Validator\Constraint
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;null** | Options for the constraint |

***

### getErrorCode

```php
protected getErrorCode(): string|null
```

***

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
