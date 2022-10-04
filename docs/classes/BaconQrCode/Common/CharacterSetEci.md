***

# CharacterSetEci

Encapsulates a Character Set ECI, according to "Extended Channel Interpretations" 5.3.1.1 of ISO 18004.

* Full name: `\BaconQrCode\Common\CharacterSetEci`
* Parent class: [`\DASPRiD\Enum\AbstractEnum`](../../DASPRiD/Enum/AbstractEnum.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CP437`|protected| |[[0, 2]]|
|`ISO8859_1`|protected| |[[1, 3], &#039;ISO-8859-1&#039;]|
|`ISO8859_2`|protected| |[[4], &#039;ISO-8859-2&#039;]|
|`ISO8859_3`|protected| |[[5], &#039;ISO-8859-3&#039;]|
|`ISO8859_4`|protected| |[[6], &#039;ISO-8859-4&#039;]|
|`ISO8859_5`|protected| |[[7], &#039;ISO-8859-5&#039;]|
|`ISO8859_6`|protected| |[[8], &#039;ISO-8859-6&#039;]|
|`ISO8859_7`|protected| |[[9], &#039;ISO-8859-7&#039;]|
|`ISO8859_8`|protected| |[[10], &#039;ISO-8859-8&#039;]|
|`ISO8859_9`|protected| |[[11], &#039;ISO-8859-9&#039;]|
|`ISO8859_10`|protected| |[[12], &#039;ISO-8859-10&#039;]|
|`ISO8859_11`|protected| |[[13], &#039;ISO-8859-11&#039;]|
|`ISO8859_12`|protected| |[[14], &#039;ISO-8859-12&#039;]|
|`ISO8859_13`|protected| |[[15], &#039;ISO-8859-13&#039;]|
|`ISO8859_14`|protected| |[[16], &#039;ISO-8859-14&#039;]|
|`ISO8859_15`|protected| |[[17], &#039;ISO-8859-15&#039;]|
|`ISO8859_16`|protected| |[[18], &#039;ISO-8859-16&#039;]|
|`SJIS`|protected| |[[20], &#039;Shift_JIS&#039;]|
|`CP1250`|protected| |[[21], &#039;windows-1250&#039;]|
|`CP1251`|protected| |[[22], &#039;windows-1251&#039;]|
|`CP1252`|protected| |[[23], &#039;windows-1252&#039;]|
|`CP1256`|protected| |[[24], &#039;windows-1256&#039;]|
|`UNICODE_BIG_UNMARKED`|protected| |[[25], &#039;UTF-16BE&#039;, &#039;UnicodeBig&#039;]|
|`UTF8`|protected| |[[26], &#039;UTF-8&#039;]|
|`ASCII`|protected| |[[27, 170], &#039;US-ASCII&#039;]|
|`BIG5`|protected| |[[28]]|
|`GB18030`|protected| |[[29], &#039;GB2312&#039;, &#039;EUC_CN&#039;, &#039;GBK&#039;]|
|`EUC_KR`|protected| |[[30], &#039;EUC-KR&#039;]|

## Properties

### values

```php
private int[] $values
```

***

### otherEncodingNames

```php
private string[] $otherEncodingNames
```

***

### valueToEci

```php
private static array&lt;int,self&gt;|null $valueToEci
```

* This property is **static**.

***

### nameToEci

```php
private static array&lt;string,self&gt;|null $nameToEci
```

* This property is **static**.

***

## Methods

### __construct

The constructor is private by default to avoid arbitrary enum creation.

```php
public __construct(array $values, string $otherEncodingNames): mixed
```

When creating your own constructor for a parameterized enum, make sure to declare it as protected, so that
the static methods are able to construct it. Avoid making it public, as that would allow creation of
non-singleton enum instances.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |
| `$otherEncodingNames` | **string** |  |

***

### getValue

Returns the primary value.

```php
public getValue(): int
```

***

### getCharacterSetEciByValue

Gets character set ECI by value.

```php
public static getCharacterSetEciByValue(int $value): ?self
```

Returns the representing ECI of a given value, or null if it is legal but unsupported.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |

***

### getCharacterSetEciByName

Returns character set ECI by name.

```php
public static getCharacterSetEciByName(string $name): ?self
```

Returns the representing ECI of a given name, or null if it is legal but unsupported

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### valueToEci

```php
private static valueToEci(): array
```

* This method is **static**.

***

### nameToEci

```php
private static nameToEci(): array
```

* This method is **static**.

***

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

