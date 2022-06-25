***

# File

Contains the properties of a constraint definition.



* Full name: `\Symfony\Component\Validator\Constraints\File`
* Parent class: [`\Symfony\Component\Validator\Constraint`](../Constraint.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NOT_FOUND_ERROR`|public| |&#039;d2a3fb6e-7ddc-4210-8fbf-2ab345ce1998&#039;|
|`NOT_READABLE_ERROR`|public| |&#039;c20c92a4-5bfa-4202-9477-28e800e0f6ff&#039;|
|`EMPTY_ERROR`|public| |&#039;5d743385-9775-4aa5-8ff5-495fb1e60137&#039;|
|`TOO_LARGE_ERROR`|public| |&#039;df8637af-d466-48c6-a59d-e7126250a654&#039;|
|`INVALID_MIME_TYPE_ERROR`|public| |&#039;744f00bc-4389-4c74-92de-9a43cde55534&#039;|

## Properties


### errorNames

Maps error codes to the names of their constants.

```php
protected static $errorNames
```



* This property is **static**.


***

### binaryFormat



```php
public $binaryFormat
```






***

### mimeTypes



```php
public $mimeTypes
```






***

### notFoundMessage



```php
public $notFoundMessage
```






***

### notReadableMessage



```php
public $notReadableMessage
```






***

### maxSizeMessage



```php
public $maxSizeMessage
```






***

### mimeTypesMessage



```php
public $mimeTypesMessage
```






***

### disallowEmptyMessage



```php
public $disallowEmptyMessage
```






***

### uploadIniSizeErrorMessage



```php
public $uploadIniSizeErrorMessage
```






***

### uploadFormSizeErrorMessage



```php
public $uploadFormSizeErrorMessage
```






***

### uploadPartialErrorMessage



```php
public $uploadPartialErrorMessage
```






***

### uploadNoFileErrorMessage



```php
public $uploadNoFileErrorMessage
```






***

### uploadNoTmpDirErrorMessage



```php
public $uploadNoTmpDirErrorMessage
```






***

### uploadCantWriteErrorMessage



```php
public $uploadCantWriteErrorMessage
```






***

### uploadExtensionErrorMessage



```php
public $uploadExtensionErrorMessage
```






***

### uploadErrorMessage



```php
public $uploadErrorMessage
```






***

### maxSize



```php
protected $maxSize
```






***

## Methods


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
public __set(mixed $option, mixed $value): mixed
```

Corresponding properties are added to the object on first access. Hence
this method will be called at most once per constraint instance and
option name.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **mixed** | The option name |
| `$value` | **mixed** | The value to set |




***

### __get



```php
public __get(mixed $option): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **mixed** |  |




***

### __isset



```php
public __isset(mixed $option): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **mixed** | The option name |




***

### normalizeBinaryFormat



```php
private normalizeBinaryFormat(mixed $maxSize): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxSize` | **mixed** |  |




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
