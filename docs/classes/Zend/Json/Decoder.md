***

# Decoder

Decode JSON encoded string to PHP variable constructs

* Full name: `\Zend\Json\Decoder`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EOF`|public| |0|
|`DATUM`|public| |1|
|`LBRACE`|public| |2|
|`LBRACKET`|public| |3|
|`RBRACE`|public| |4|
|`RBRACKET`|public| |5|
|`COMMA`|public| |6|
|`COLON`|public| |7|

## Properties

### source

Use to maintain a "pointer" to the source being decoded

```php
protected string $source
```

***

### sourceLength

Caches the source length

```php
protected int $sourceLength
```

***

### offset

The offset within the source being decoded

```php
protected int $offset
```

***

### token

The current token being considered in the parser cycle

```php
protected int $token
```

***

### decodeType

Flag indicating how objects should be decoded

```php
protected int $decodeType
```

***

### tokenValue

```php
protected $tokenValue
```

***

## Methods

### decodeUnicodeString

Decode Unicode Characters from \u0000 ASCII syntax.

```php
public static decodeUnicodeString(string $chrs): string
```

This algorithm was originally developed for the Solar Framework by Paul M. Jones

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chrs` | **string** |  |

**See Also:**

* http://solarphp.com/ - * https://github.com/solarphp/core/blob/master/Solar/Json.php -

***

### __construct

Constructor

```php
protected __construct(string $source, int $decodeType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | String source to decode |
| `$decodeType` | **int** | How objects should be decoded -- see<br />{@link} and {@link} for<br />valid values |

***

### decode

Decode a JSON source string

```php
public static decode(string $source, int $objectDecodeType = Json::TYPE_OBJECT): mixed
```

Decodes a JSON encoded string. The value returned will be one of the following:

- integer - float - boolean - null - stdClass - array - array of one or more of the above types

By default, decoded objects will be returned as associative arrays; to return a stdClass object instead, pass {@link} to
the $objectDecodeType parameter.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | String to be decoded |
| `$objectDecodeType` | **
int** | How objects should be decoded; should be<br />either or {@link} or<br />{@link}; defaults to TYPE_ARRAY |

***

### _decodeValue

Recursive driving routine for supported toplevel tops

```php
protected _decodeValue(): mixed
```

***

### _decodeObject

Decodes an object of the form:
{ "attribute: value, "attribute2" : value,...}

```php
protected _decodeObject(): array|\stdClass
```

If Zend\Json\Encoder was used to encode the original object then a special attribute called __className which specifies
a class name that should wrap the data contained within the encoded source.

Decodes to either an array or stdClass object, based on the value of {@link}. If invalid $decodeType present, returns as
an array.









***

### _decodeArray

Decodes a JSON array format:
[element, element2,...,elementN]

```php
protected _decodeArray(): array
```

***

### _eatWhitespace

Removes whitespace characters from the source input

```php
protected _eatWhitespace(): mixed
```

***

### _getNextToken

Retrieves the next token from the source stream

```php
protected _getNextToken(): int
```

**Return Value:**

Token constant value specified in class definition



***

### _utf162utf8

Convert a string from one UTF-16 char to one UTF-8 char.

```php
protected static _utf162utf8(string $utf16): string
```

Normally should be handled by mb_convert_encoding, but provides a slower PHP-only method for installations that lack the
multibyte string extension.

This method is from the Solar Framework by Paul M. Jones

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$utf16` | **string** | UTF-16 character |

**Return Value:**

UTF-8 character

**See Also:**

* http://solarphp.com -

***


***

