***

# LanguageValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Constraints\LanguageValidatorTest`
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

### testExpectsStringCompatibleType

```php
public testExpectsStringCompatibleType(): mixed
```

***

### testValidLanguages

```php
public testValidLanguages(mixed $language): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **mixed** |  |

***

### getValidLanguages

```php
public getValidLanguages(): mixed
```

***

### testInvalidLanguages

```php
public testInvalidLanguages(mixed $language): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **mixed** |  |

***

### getInvalidLanguages

```php
public getInvalidLanguages(): mixed
```

***

### testValidateUsingCountrySpecificLocale

```php
public testValidateUsingCountrySpecificLocale(): mixed
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
