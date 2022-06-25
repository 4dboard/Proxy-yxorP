***

# ConcreteComposite

A constraint that is composed of other constraints.

You should never use the nested constraint instances anywhere else, because their groups are adapted when passed to the
constructor of this class.

If you want to create your own composite constraint, extend this class and let {@link} return the name of the property
which contains the nested constraints.

* Full name: `\Symfony\Component\Validator\Tests\Constraints\ConcreteComposite`
* Parent class: [`\Symfony\Component\Validator\Constraints\Composite`](../../Constraints/Composite.md)

## Properties

### constraints

```php
public $constraints
```

***

## Methods

### getCompositeOption

Returns the name of the property that contains the nested constraints.

```php
protected getCompositeOption(): string
```

**Return Value:**

The property name



***

### getDefaultOption

```php
public getDefaultOption(): mixed
```

***

## Inherited methods

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

### getCompositeOption

Returns the name of the property that contains the nested constraints.

```php
protected getCompositeOption(): string
```

* This method is **abstract**.

**Return Value:**

The property name



***

### initializeNestedConstraints

Initializes the nested constraints.

```php
protected initializeNestedConstraints(): mixed
```

This method can be overwritten in subclasses to clean up the nested constraints passed to the constructor.

**See Also:**

* \Symfony\Component\Validator\Constraints\Collection::initializeNestedConstraints() -

***

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
