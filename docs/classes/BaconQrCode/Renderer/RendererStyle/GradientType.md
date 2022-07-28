***

# GradientType





* Full name: `\BaconQrCode\Renderer\RendererStyle\GradientType`
* Parent class: [`\DASPRiD\Enum\AbstractEnum`](../../../DASPRiD/Enum/AbstractEnum.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERTICAL`|protected| |null|
|`HORIZONTAL`|protected| |null|
|`DIAGONAL`|protected| |null|
|`INVERSE_DIAGONAL`|protected| |null|
|`RADIAL`|protected| |null|




## Inherited methods


### __construct

The constructor is private by default to avoid arbitrary enum creation.

```php
private __construct(): mixed
```

When creating your own constructor for a parameterized enum, make sure to declare it as protected, so that
the static methods are able to construct it. Avoid making it public, as that would allow creation of
non-singleton enum instances.









***

### __callStatic

Magic getter which forwards all calls to {@see self::valueOf()}.

```php
final public static __callStatic(string $name, array $arguments): static
```



* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$arguments` | **array** |  |




***

### valueOf

Returns an enum with the specified name.

```php
final public static valueOf(string $name): static
```

The name must match exactly an identifier used to declare an enum in this type (extraneous whitespace characters
are not permitted).

* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### createValue



```php
private static createValue(string $name, int $ordinal, array $arguments): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$ordinal` | **int** |  |
| `$arguments` | **array** |  |




***

### values

Obtains all possible types defined by this enum.

```php
final public static values(): static[]
```



* This method is **static**.

* This method is **final**.





***

### constants



```php
private static constants(): array
```



* This method is **static**.







***

### name

Returns the name of this enum constant, exactly as declared in its enum declaration.

```php
final public name(): string
```

Most programmers should use the {@see} method in preference to this one, as the toString
method may return a more user-friendly name. This method is designed primarily for use in specialized situations
where correctness depends on getting the exact name, which will not vary from release to release.



* This method is **final**.





***

### ordinal

Returns the ordinal of this enumeration constant (its position in its enum declaration, where the initial
constant is assigned an ordinal of zero).

```php
final public ordinal(): int
```

Most programmers will have no use for this method. It is designed for use by sophisticated enum-based data
structures.



* This method is **final**.





***

### compareTo

Compares this enum with the specified object for order.

```php
final public compareTo(self $other): int
```

Returns negative integer, zero or positive integer as this object is less than, equal to or greater than the
specified object.

Enums are only comparable to other enums of the same type. The natural order implemented by this method is the
order in which the constants are declared.



* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |




***

### __clone

Forbid cloning enums.

```php
final public __clone(): mixed
```





* This method is **final**.





***

### __sleep

Forbid serializing enums.

```php
final public __sleep(): array
```





* This method is **final**.





***

### __wakeup

Forbid unserializing enums.

```php
final public __wakeup(): void
```





* This method is **final**.





***

### __toString

Turns the enum into a string representation.

```php
public __toString(): string
```

You may override this method to give a more user-friendly version.









***


***

