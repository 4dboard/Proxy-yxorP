***

# BicValidator

Base class for constraint validators.

* Full name: `\Symfony\Component\Validator\Constraints\BicValidator`
* Parent class: [`\Symfony\Component\Validator\ConstraintValidator`](../ConstraintValidator.md)

**See Also:**

* https://en.wikipedia.org/wiki/ISO_9362#Structure -

## Methods

### validate

{@inheritdoc}

```php
public validate(mixed $value, \Symfony\Component\Validator\Constraint $constraint): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$constraint` | **\Symfony\Component\Validator\Constraint** |  |

***

## Inherited methods

### initialize

Initializes the constraint validator.

```php
public initialize(\Symfony\Component\Validator\ExecutionContextInterface $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Symfony\Component\Validator\ExecutionContextInterface** | The current validation context |

***

### buildViolation

Wrapper for {@link ExecutionContextInterface::buildViolation} that supports the 2.4 context API.

```php
protected buildViolation(string $message, array $parameters = array()): \Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The violation message |
| `$parameters` | **array** | The message parameters |

**Return Value:**

The violation builder



***

### buildViolationInContext

Wrapper for {@link ExecutionContextInterface::buildViolation} that supports the 2.4 context API.

```php
protected buildViolationInContext(\Symfony\Component\Validator\ExecutionContextInterface $context, string $message, array $parameters = array()): \Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Symfony\Component\Validator\ExecutionContextInterface** | The context to use |
| `$message` | **string** | The violation message |
| `$parameters` | **array** | The message parameters |

**Return Value:**

The violation builder



***

### formatTypeOf

Returns a string representation of the type of the value.

```php
protected formatTypeOf(mixed $value): string
```

This method should be used if you pass the type of a value as message parameter to a constraint violation. Note that
such parameters should usually not be included in messages aimed at non-technical people.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to return the type of |

**Return Value:**

The type of the value



***

### formatValue

Returns a string representation of the value.

```php
protected formatValue(mixed $value, int $format): string
```

This method returns the equivalent PHP tokens for most scalar types
(i.e. "false" for false, "1" for 1 etc.). Strings are always wrapped in double quotes ("). Objects, arrays and resources
are formatted as
"object", "array" and "resource". If the $format bitmask contains the PRETTY_DATE bit, then {@link} objects will be
formatted as RFC-3339 dates ("Y-m-d H:i:s").

Be careful when passing message parameters to a constraint violation that (may) contain objects, arrays or resources.
These parameters should only be displayed for technical users. Non-technical users won't know what an "object", "array"
or "resource" is and will be confused by the violation message.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to format as string |
| `$format` | **int** | A bitwise combination of the format<br />constants in this class |

**Return Value:**

The string representation of the passed value



***

### formatValues

Returns a string representation of a list of values.

```php
protected formatValues(array $values, int $format): string
```

Each of the values is converted to a string using {@link}. The values are then concatenated with commas.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | A list of values |
| `$format` | **int** | A bitwise combination of the format<br />constants in this class |

**Return Value:**

The string representation of the value list

**See Also:**

* \Symfony\Component\Validator\formatValue() -

***


***

