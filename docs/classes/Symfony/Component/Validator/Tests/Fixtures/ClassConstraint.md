***

# ClassConstraint

Contains the properties of a constraint definition.

A constraint can be defined on a class, a property or a getter method. The Constraint class encapsulates all the
configuration required for validating this class, property or getter result successfully.

Constraint instances are immutable and serializable.

* Full name: `\Symfony\Component\Validator\Tests\Fixtures\ClassConstraint`
* Parent class: [`\Symfony\Component\Validator\Constraint`](../../Constraint.md)

## Methods

### getTargets

Returns whether the constraint can be put onto classes, properties or both.

```php
public getTargets(): string|array
```

This method should return one or more of the constants Constraint::CLASS_CONSTRAINT and Constraint::PROPERTY_CONSTRAINT.

**Return Value:**

One or more constant values



***

## Inherited methods

### getErrorName

Returns the name of the given error code.

```php
public static getErrorName(string $errorCode): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorCode` | **string** | The error code |

**Return Value:**

The name of the error code



***

### __construct

Initializes the constraint with options.

```php
public __construct(mixed $options = null): mixed
```

You should pass an associative array. The keys should be the names of existing properties in this class. The values
should be the value for these properties.

Alternatively you can override the method getDefaultOption() to return the name of an existing property. If no
associative array is passed, this property is set instead.

You can force that certain options are set by overriding getRequiredOptions() to return the names of these options. If
any option is not set here, an exception is thrown.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **
mixed** | The options (as associative array)<br />or the value for the default<br />option (any other type) |

***

### __set

Sets the value of a lazily initialized option.

```php
public __set(string $option, mixed $value): mixed
```

Corresponding properties are added to the object on first access. Hence this method will be called at most once per
constraint instance and option name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | The option name |
| `$value` | **mixed** | The value to set |

***

### __isset

```php
public __isset(string $option): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | The option name |

***

### addImplicitGroupName

Adds the given group if this constraint is in the Default group.

```php
public addImplicitGroupName(string $group): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **string** |  |

***

### getDefaultOption

Returns the name of the default option.

```php
public getDefaultOption(): string
```

Override this method to define a default option.

**See Also:**

* \Symfony\Component\Validator\__construct() -

***

### getRequiredOptions

Returns the name of the required options.

```php
public getRequiredOptions(): array
```

Override this method if you want to define required options.

**See Also:**

* \Symfony\Component\Validator\__construct() -

***

### validatedBy

Returns the name of the class that validates this constraint.

```php
public validatedBy(): string
```

By default, this is the fully qualified name of the constraint class suffixed with "Validator". You can override this
method to change that behaviour.









***

### getTargets

Returns whether the constraint can be put onto classes, properties or both.

```php
public getTargets(): string|array
```

This method should return one or more of the constants Constraint::CLASS_CONSTRAINT and Constraint::PROPERTY_CONSTRAINT.

**Return Value:**

One or more constant values yxorP::get('REQUEST')
