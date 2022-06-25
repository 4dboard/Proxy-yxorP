***

# FileValidatorTest

* Full name: `\Symfony\Component\Validator\Tests\Constraints\FileValidatorTest`
* Parent
  class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest`](./AbstractConstraintValidatorTest.md)
* This class is an **Abstract class**

## Properties

### path

```php
protected $path
```

***

### file

```php
protected $file
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

### tearDown

```php
protected tearDown(): mixed
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

### testExpectsStringCompatibleTypeOrFile

```php
public testExpectsStringCompatibleTypeOrFile(): mixed
```

***

### testValidFile

```php
public testValidFile(): mixed
```

***

### testValidUploadedfile

```php
public testValidUploadedfile(): mixed
```

***

### provideMaxSizeExceededTests

```php
public provideMaxSizeExceededTests(): mixed
```

***

### testMaxSizeExceeded

```php
public testMaxSizeExceeded(mixed $bytesWritten, mixed $limit, mixed $sizeAsString, mixed $limitAsString, mixed $suffix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytesWritten` | **mixed** |  |
| `$limit` | **mixed** |  |
| `$sizeAsString` | **mixed** |  |
| `$limitAsString` | **mixed** |  |
| `$suffix` | **mixed** |  |

***

### provideMaxSizeNotExceededTests

```php
public provideMaxSizeNotExceededTests(): mixed
```

***

### testMaxSizeNotExceeded

```php
public testMaxSizeNotExceeded(mixed $bytesWritten, mixed $limit): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytesWritten` | **mixed** |  |
| `$limit` | **mixed** |  |

***

### testInvalidMaxSize

```php
public testInvalidMaxSize(): mixed
```

***

### provideBinaryFormatTests

```php
public provideBinaryFormatTests(): mixed
```

***

### testBinaryFormat

```php
public testBinaryFormat(mixed $bytesWritten, mixed $limit, mixed $binaryFormat, mixed $sizeAsString, mixed $limitAsString, mixed $suffix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytesWritten` | **mixed** |  |
| `$limit` | **mixed** |  |
| `$binaryFormat` | **mixed** |  |
| `$sizeAsString` | **mixed** |  |
| `$limitAsString` | **mixed** |  |
| `$suffix` | **mixed** |  |

***

### testValidMimeType

```php
public testValidMimeType(): mixed
```

***

### testValidWildcardMimeType

```php
public testValidWildcardMimeType(): mixed
```

***

### testInvalidMimeType

```php
public testInvalidMimeType(): mixed
```

***

### testInvalidWildcardMimeType

```php
public testInvalidWildcardMimeType(): mixed
```

***

### testDisallowEmpty

```php
public testDisallowEmpty(): mixed
```

***

### testUploadedFileError

```php
public testUploadedFileError(mixed $error, mixed $message, array $params = array(), mixed $maxSize = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **mixed** |  |
| `$message` | **mixed** |  |
| `$params` | **array** |  |
| `$maxSize` | **mixed** |  |

***

### uploadedFileErrorProvider

```php
public uploadedFileErrorProvider(): mixed
```

***

### getFile

```php
protected getFile(mixed $filename): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |

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
