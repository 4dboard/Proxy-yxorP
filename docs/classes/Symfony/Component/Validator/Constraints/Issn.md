***

# Issn

Contains the properties of a constraint definition.



* Full name: `\Symfony\Component\Validator\Constraints\Issn`
* Parent class: [`\Symfony\Component\Validator\Constraint`](../Constraint.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TOO_SHORT_ERROR`|public| |&#039;6a20dd3d-f463-4460-8e7b-18a1b98abbfb&#039;|
|`TOO_LONG_ERROR`|public| |&#039;37cef893-5871-464e-8b12-7fb79324833c&#039;|
|`MISSING_HYPHEN_ERROR`|public| |&#039;2983286f-8134-4693-957a-1ec4ef887b15&#039;|
|`INVALID_CHARACTERS_ERROR`|public| |&#039;a663d266-37c2-4ece-a914-ae891940c588&#039;|
|`INVALID_CASE_ERROR`|public| |&#039;7b6dd393-7523-4a6c-b84d-72b91bba5e1a&#039;|
|`CHECKSUM_FAILED_ERROR`|public| |&#039;b0f92dbc-667c-48de-b526-ad9586d43e85&#039;|

## Properties


### errorNames

Maps error codes to the names of their constants.

```php
protected static $errorNames
```



* This property is **static**.


***

### message



```php
public $message
```






***

### caseSensitive



```php
public $caseSensitive
```






***

### requireHyphen



```php
public $requireHyphen
```






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

You should pass an associative array. The keys should be the names of
existing properties in this class. The values should be the value for these
properties.

Alternatively you can override the method getDefaultOption() to return the
name of an existing property. If no associative array is passed, this
property is set instead.

You can force that certain options are set by overriding
getRequiredOptions() to return the names of these options. If any
option is not set here, an exception is thrown.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** | The options (as associative array)<br />or the value for the default<br />option (any other type) |




***

### __set

Sets the value of a lazily initialized option.

```php
public __set(string $option, mixed $value): mixed
```

Corresponding properties are added to the object on first access. Hence
this method will be called at most once per constraint instance and
option name.






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

By default, this is the fully qualified name of the constraint class
suffixed with "Validator". You can override this method to change that
behaviour.









***

### getTargets

Returns whether the constraint can be put onto classes, properties or
both.

```php
public getTargets(): string|array
```

This method should return one or more of the constants
Constraint::CLASS_CONSTRAINT and Constraint::PROPERTY_CONSTRAINT.







**Return Value:**

One or more constant values



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
