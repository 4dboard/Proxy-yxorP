***

# Image

Contains the properties of a constraint definition.

* Full name: `\Symfony\Component\Validator\Constraints\Image`
* Parent class: [`\Symfony\Component\Validator\Constraints\File`](./File.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SIZE_NOT_DETECTED_ERROR`|public| |&#039;6d55c3f4-e58e-4fe3-91ee-74b492199956&#039;|
|`TOO_WIDE_ERROR`|public| |&#039;7f87163d-878f-47f5-99ba-a8eb723a1ab2&#039;|
|`TOO_NARROW_ERROR`|public| |&#039;9afbd561-4f90-4a27-be62-1780fc43604a&#039;|
|`TOO_HIGH_ERROR`|public| |&#039;7efae81c-4877-47ba-aa65-d01ccb0d4645&#039;|
|`TOO_LOW_ERROR`|public| |&#039;aef0cb6a-c07f-4894-bc08-1781420d7b4c&#039;|
|`RATIO_TOO_BIG_ERROR`|public| |&#039;70cafca6-168f-41c9-8c8c-4e47a52be643&#039;|
|`RATIO_TOO_SMALL_ERROR`|public| |&#039;59b8c6ef-bcf2-4ceb-afff-4642ed92f12e&#039;|
|`SQUARE_NOT_ALLOWED_ERROR`|public| |&#039;5d41425b-facb-47f7-a55a-de9fbe45cb46&#039;|
|`LANDSCAPE_NOT_ALLOWED_ERROR`|public| |&#039;6f895685-7cf2-4d65-b3da-9029c5581d88&#039;|
|`PORTRAIT_NOT_ALLOWED_ERROR`|public| |&#039;65608156-77da-4c79-a88c-02ef6d18c782&#039;|

## Properties

### errorNames

Maps error codes to the names of their constants.

```php
protected static $errorNames
```

* This property is **static**.

***

### mimeTypes

```php
public $mimeTypes
```

***

### minWidth

```php
public $minWidth
```

***

### maxWidth

```php
public $maxWidth
```

***

### maxHeight

```php
public $maxHeight
```

***

### minHeight

```php
public $minHeight
```

***

### maxRatio

```php
public $maxRatio
```

***

### minRatio

```php
public $minRatio
```

***

### allowSquare

```php
public $allowSquare
```

***

### allowLandscape

```php
public $allowLandscape
```

***

### allowPortrait

```php
public $allowPortrait
```

***

### mimeTypesMessage

```php
public $mimeTypesMessage
```

***

### sizeNotDetectedMessage

```php
public $sizeNotDetectedMessage
```

***

### maxWidthMessage

```php
public $maxWidthMessage
```

***

### minWidthMessage

```php
public $minWidthMessage
```

***

### maxHeightMessage

```php
public $maxHeightMessage
```

***

### minHeightMessage

```php
public $minHeightMessage
```

***

### maxRatioMessage

```php
public $maxRatioMessage
```

***

### minRatioMessage

```php
public $minRatioMessage
```

***

### allowSquareMessage

```php
public $allowSquareMessage
```

***

### allowLandscapeMessage

```php
public $allowLandscapeMessage
```

***

### allowPortraitMessage

```php
public $allowPortraitMessage
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
public __isset(string $option): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | The option name |

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
