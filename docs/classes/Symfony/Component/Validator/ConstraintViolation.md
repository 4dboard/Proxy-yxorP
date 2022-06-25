***

# ConstraintViolation

Default implementation of {@ConstraintViolationInterface}.

* Full name: `\Symfony\Component\Validator\ConstraintViolation`
* This class implements:
  [`\Symfony\Component\Validator\ConstraintViolationInterface`](./ConstraintViolationInterface.md)

## Properties

### message

```php
private $message
```

***

### messageTemplate

```php
private $messageTemplate
```

***

### parameters

```php
private $parameters
```

***

### plural

```php
private $plural
```

***

### root

```php
private $root
```

***

### propertyPath

```php
private $propertyPath
```

***

### invalidValue

```php
private $invalidValue
```

***

### constraint

```php
private $constraint
```

***

### code

```php
private $code
```

***

### cause

```php
private $cause
```

***

## Methods

### __construct

Creates a new constraint violation.

```php
public __construct(string $message, string $messageTemplate, array $parameters, mixed $root, string $propertyPath, mixed $invalidValue, int|null $plural = null, mixed $code = null, \Symfony\Component\Validator\Constraint|null $constraint = null, mixed $cause = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The violation message |
| `$messageTemplate` | **string** | The raw violation message |
| `$parameters` | **array** | The parameters to substitute in the<br />raw violation message |
| `$root` | **mixed** | The value originally passed to the<br />validator |
| `$propertyPath` | **string** | The property path from the root<br />value to the invalid value |
| `$invalidValue` | **mixed** | The invalid value that caused this<br />violation |
| `$plural` | **int&#124;null** | The number for determining the plural<br />form when translating the message |
| `$code` | **mixed** | The error code of the violation |
| `$constraint` | **
\Symfony\Component\Validator\Constraint&#124;null** | The constraint whose validation<br />caused the violation |
| `$cause` | **mixed** | The cause of the violation |

***

### __toString

Converts the violation into a string for debugging purposes.

```php
public __toString(): string
```

**Return Value:**

The violation as string



***

### getMessageTemplate

Returns the raw violation message.

```php
public getMessageTemplate(): string
```

**Return Value:**

The raw violation message



***

### getMessageParameters

Returns the parameters to be inserted into the raw violation message.

```php
public getMessageParameters(): array
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

a possibly empty list of parameters indexed by the names that appear in the message template



***

### getParameters

Alias of {@link getMessageParameters()}.

```php
public getParameters(): mixed
```

***

### getMessagePluralization

Returns a number for pluralizing the violation message.

```php
public getMessagePluralization(): int|null
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The number to use to pluralize of the message



***

### getPlural

Alias of {@link getMessagePluralization()}.

```php
public getPlural(): mixed
```

***

### getMessage

Returns the violation message.

```php
public getMessage(): string
```

**Return Value:**

The violation message



***

### getRoot

Returns the root element of the validation.

```php
public getRoot(): mixed
```

**Return Value:**

The value that was passed originally to the validator when the validation was started. Because the validator traverses
the object graph, the value at which the violation occurs is not necessarily the value that was originally validated.



***

### getPropertyPath

Returns the property path from the root element to the violation.

```php
public getPropertyPath(): string
```

**Return Value:**

The property path indicates how the validator reached the invalid value from the root element. If the root element is
a <tt>Person</tt> instance with a property
"address" that contains an <tt>Address</tt> instance with an invalid property "street", the generated property path is "
address.street". Property access is denoted by dots, while array access is denoted by square brackets, for example "
addresses[1].street".



***

### getInvalidValue

Returns the value that caused the violation.

```php
public getInvalidValue(): mixed
```

**Return Value:**

the invalid value that caused the validated constraint to fail



***

### getConstraint

Returns the constraint whose validation caused the violation.

```php
public getConstraint(): \Symfony\Component\Validator\Constraint|null
```

**Return Value:**

The constraint or null if it is not known



***

### getCause

Returns the cause of the violation.

```php
public getCause(): mixed
```

***

### getCode

Returns a machine-digestible error code for the violation.

```php
public getCode(): string|null
```

**Return Value:**

The error code yxorP::get('REQUEST')
