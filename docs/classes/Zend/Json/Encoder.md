***

# Encoder

Encode PHP constructs to JSON



* Full name: `\Zend\Json\Encoder`



## Properties


### cycleCheck

Whether or not to check for possible cycling

```php
protected bool $cycleCheck
```






***

### options

Additional options used during encoding

```php
protected array $options
```






***

### visited

Array of visited objects; used to prevent cycling.

```php
protected array $visited
```






***

## Methods


### __construct

Constructor

```php
protected __construct(bool $cycleCheck = false, array $options = []): \Zend\Json\Encoder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cycleCheck` | **bool** | Whether or not to check for recursion when encoding |
| `$options` | **array** | Additional options used during encoding |




***

### encode

Use the JSON encoding scheme for the value specified

```php
public static encode(mixed $value, bool $cycleCheck = false, array $options = []): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to be encoded |
| `$cycleCheck` | **bool** | Whether or not to check for possible object recursion when encoding |
| `$options` | **array** | Additional options used during encoding |


**Return Value:**

The encoded value



***

### _encodeValue

Recursive driver which determines the type of value to be encoded
and then dispatches to the appropriate method. $values are either
   - objects (returns from {@link _encodeObject()})
   - arrays (returns from {@link _encodeArray()})
   - basic datums (e.g. numbers or strings) (returns from {@link _encodeDatum()})

```php
protected _encodeValue(& $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** | mixed The value to be encoded |


**Return Value:**

Encoded value



***

### _encodeObject

Encode an object to JSON by encoding each of the public properties

```php
protected _encodeObject(& $value): string
```

A special property is added to the JSON object called '__className'
that contains the name of the class of $value. This is used to decode
the object on the client into a specific class.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** | object |




***

### _wasVisited

Determine if an object has been serialized already

```php
protected _wasVisited(mixed& $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### _encodeArray

JSON encode an array value

```php
protected _encodeArray(& $array): string
```

Recursively encodes each value of an array and returns a JSON encoded
array string.

Arrays are defined as integer-indexed arrays starting at index 0, where
the last index is (count($array) -1); any deviation from that is
considered an associative array, and will be encoded as such.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** | array |




***

### _encodeDatum

JSON encode a basic data type (string, number, boolean, null)

```php
protected _encodeDatum(mixed& $value): string
```

If value type is not a string, number, boolean, or null, the string
'null' is returned.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### _encodeString

JSON encode a string value by escaping characters as necessary

```php
protected _encodeString(string& $string): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### _encodeConstants

Encode the constants associated with the ReflectionClass
parameter. The encoding format is based on the class2 format

```php
private static _encodeConstants(\ReflectionClass $cls): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cls` | **\ReflectionClass** |  |


**Return Value:**

Encoded constant block in class2 format



***

### _encodeMethods

Encode the public methods of the ReflectionClass in the
class2 format

```php
private static _encodeMethods(\ReflectionClass $cls): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cls` | **\ReflectionClass** |  |


**Return Value:**

Encoded method fragment



***

### _encodeVariables

Encode the public properties of the ReflectionClass in the class2
format.

```php
private static _encodeVariables(\ReflectionClass $cls): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cls` | **\ReflectionClass** |  |


**Return Value:**

Encode properties list



***

### encodeClass

Encodes the given $className into the class2 model of encoding PHP
classes into JavaScript class2 classes.

```php
public static encodeClass( $className,  $package = &#039;&#039;): string
```

NOTE: Currently only public methods and variables are proxied onto
the client machine

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **** | string The name of the class, the class must be<br />instantiable using a null constructor |
| `$package` | **** | string Optional package name appended to JavaScript<br />proxy class name |


**Return Value:**

The class2 (JavaScript) encoding of the class



***

### encodeClasses

Encode several classes at once

```php
public static encodeClasses(array $classNames, string $package = &#039;&#039;): string
```

Returns JSON encoded classes, using {@link}.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classNames` | **array** |  |
| `$package` | **string** |  |




***

### encodeUnicodeString

Encode Unicode Characters to \u0000 ASCII syntax.

```php
public static encodeUnicodeString(string $value): string
```

This algorithm was originally developed for the
Solar Framework by Paul M. Jones

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |



**See Also:**

* http://solarphp.com/ - * https://github.com/solarphp/core/blob/master/Solar/Json.php - 

***

### _utf82utf16

Convert a string from one UTF-8 char to one UTF-16 char.

```php
protected static _utf82utf16(string $utf8): string
```

Normally should be handled by mb_convert_encoding, but
provides a slower PHP-only method for installations
that lack the multibyte string extension.

This method is from the Solar Framework by Paul M. Jones

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$utf8` | **string** | UTF-8 character |


**Return Value:**

UTF-16 character


**See Also:**

* http://solarphp.com - 

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
