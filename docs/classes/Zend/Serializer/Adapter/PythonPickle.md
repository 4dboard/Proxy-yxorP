***

# PythonPickle

* Full name: `\Zend\Serializer\Adapter\PythonPickle`
* Parent class: [`\Zend\Serializer\Adapter\AbstractAdapter`](./AbstractAdapter.md)

**See Also:**

*
    - Phython3.1/Lib/pickle.py
*
    - Phython3.1/Modules/_pickle.c
* http://www.python.org -
* http://pickle-js.googlecode.com -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OP_MARK`|public| |&#039;(&#039;|
|`OP_STOP`|public| |&#039;.&#039;|
|`OP_POP`|public| |&#039;0&#039;|
|`OP_POP_MARK`|public| |&#039;1&#039;|
|`OP_DUP`|public| |&#039;2&#039;|
|`OP_FLOAT`|public| |&#039;F&#039;|
|`OP_INT`|public| |&#039;I&#039;|
|`OP_BININT`|public| |&#039;J&#039;|
|`OP_BININT1`|public| |&#039;K&#039;|
|`OP_LONG`|public| |&#039;L&#039;|
|`OP_BININT2`|public| |&#039;M&#039;|
|`OP_NONE`|public| |&#039;N&#039;|
|`OP_PERSID`|public| |&#039;P&#039;|
|`OP_BINPERSID`|public| |&#039;Q&#039;|
|`OP_REDUCE`|public| |&#039;R&#039;|
|`OP_STRING`|public| |&#039;S&#039;|
|`OP_BINSTRING`|public| |&#039;T&#039;|
|`OP_SHORT_BINSTRING`|public| |&#039;U&#039;|
|`OP_UNICODE`|public| |&#039;V&#039;|
|`OP_BINUNICODE`|public| |&#039;X&#039;|
|`OP_APPEND`|public| |&#039;a&#039;|
|`OP_BUILD`|public| |&#039;b&#039;|
|`OP_GLOBAL`|public| |&#039;c&#039;|
|`OP_DICT`|public| |&#039;d&#039;|
|`OP_EMPTY_DICT`|public| |&#039;}&#039;|
|`OP_APPENDS`|public| |&#039;e&#039;|
|`OP_GET`|public| |&#039;g&#039;|
|`OP_BINGET`|public| |&#039;h&#039;|
|`OP_INST`|public| |&#039;i&#039;|
|`OP_LONG_BINGET`|public| |&#039;j&#039;|
|`OP_LIST`|public| |&#039;l&#039;|
|`OP_EMPTY_LIST`|public| |&#039;]&#039;|
|`OP_OBJ`|public| |&#039;o&#039;|
|`OP_PUT`|public| |&#039;p&#039;|
|`OP_BINPUT`|public| |&#039;q&#039;|
|`OP_LONG_BINPUT`|public| |&#039;r&#039;|
|`OP_SETITEM`|public| |&#039;s&#039;|
|`OP_TUPLE`|public| |&#039;t&#039;|
|`OP_EMPTY_TUPLE`|public| |&#039;)&#039;|
|`OP_SETITEMS`|public| |&#039;u&#039;|
|`OP_BINFLOAT`|public| |&#039;G&#039;|
|`OP_PROTO`|public| |&quot;\x80&quot;|
|`OP_NEWOBJ`|public| |&quot;\x81&quot;|
|`OP_EXT1`|public| |&quot;\x82&quot;|
|`OP_EXT2`|public| |&quot;\x83&quot;|
|`OP_EXT4`|public| |&quot;\x84&quot;|
|`OP_TUPLE1`|public| |&quot;\x85&quot;|
|`OP_TUPLE2`|public| |&quot;\x86&quot;|
|`OP_TUPLE3`|public| |&quot;\x87&quot;|
|`OP_NEWTRUE`|public| |&quot;\x88&quot;|
|`OP_NEWFALSE`|public| |&quot;\x89&quot;|
|`OP_LONG1`|public| |&quot;\x8a&quot;|
|`OP_LONG4`|public| |&quot;\x8b&quot;|
|`OP_BINBYTES`|public| |&#039;B&#039;|
|`OP_SHORT_BINBYTES`|public| |&#039;C&#039;|

## Properties

### isLittleEndian

Whether or not the system is little-endian

```php
protected static bool $isLittleEndian
```

* This property is **static**.

***

### quoteString

```php
protected static array $quoteString
```

* This property is **static**.

***

### protocol

```php
protected $protocol
```

***

### memo

```php
protected $memo
```

***

### pickle

```php
protected $pickle
```

***

### pickleLen

```php
protected $pickleLen
```

***

### pos

```php
protected $pos
```

***

### stack

```php
protected $stack
```

***

### marker

```php
protected $marker
```

***

### bigIntegerAdapter

```php
protected \Zend\Math\BigInteger\Adapter\AdapterInterface $bigIntegerAdapter
```

***

### options

```php
protected \Zend\Serializer\Adapter\PythonPickleOptions $options
```

***

## Methods

### __construct

Constructor.

```php
public __construct(array|\Traversable|\Zend\Serializer\Adapter\PythonPickleOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\PythonPickleOptions** | Optional |

***

### setOptions

Set options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\PythonPickleOptions $options): \Zend\Serializer\Adapter\PythonPickle
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\PythonPickleOptions** |  |

***

### getOptions

Get options

```php
public getOptions(): \Zend\Serializer\Adapter\PythonPickleOptions
```

***

### serialize

Serialize PHP to PythonPickle format

```php
public serialize(mixed $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### write

Write a value

```php
protected write(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### writeProto

Write pickle protocol

```php
protected writeProto(int $protocol): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$protocol` | **int** |  |

***

### writeGet

Write a get

```php
protected writeGet(int $id): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** | Id of memo |

***

### writePut

Write a put

```php
protected writePut(int $id): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** | Id of memo |

***

### writeNull

Write a null as None

```php
protected writeNull(): mixed
```

***

### writeBool

Write boolean value

```php
protected writeBool(bool $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **bool** |  |

***

### writeInt

Write an integer value

```php
protected writeInt(int $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int** |  |

***

### writeFloat

Write a float value

```php
protected writeFloat(float $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **float** |  |

***

### writeString

Write a string value

```php
protected writeString(string $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### writeArrayDict

Write an associative array value as dictionary

```php
protected writeArrayDict(array|\Traversable $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array&#124;\Traversable** |  |

***

### writeArrayList

Write a simple array value as list

```php
protected writeArrayList(array $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array** |  |

***

### writeObject

Write an object as a dictionary

```php
protected writeObject(object $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **object** |  |

***

### writeStop

Write stop

```php
protected writeStop(): mixed
```

***

### memorize

Add a value to the memo and write the id

```php
protected memorize(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### searchMemo

Search a value in the memo and return the id

```php
protected searchMemo(mixed $value): int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

**Return Value:**

The id or false



***

### quoteString

Quote/Escape a string

```php
protected quoteString(string $str): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

**Return Value:**

quoted string



***

### unserialize

Unserialize from Python Pickle format to PHP

```php
public unserialize(string $pickle): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pickle` | **string** |  |

***

### clearProcessVars

Clear temp variables needed for processing

```php
protected clearProcessVars(): mixed
```

***

### load

Load a pickle opcode

```php
protected load(string $op): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$op` | **string** |  |

***

### loadPut

Load a PUT opcode

```php
protected loadPut(): mixed
```

***

### loadBinPut

Load a binary PUT

```php
protected loadBinPut(): mixed
```

***

### loadLongBinPut

Load a long binary PUT

```php
protected loadLongBinPut(): mixed
```

***

### loadGet

Load a GET operation

```php
protected loadGet(): mixed
```

***

### loadBinGet

Load a binary GET operation

```php
protected loadBinGet(): mixed
```

***

### loadLongBinGet

Load a long binary GET operation

```php
protected loadLongBinGet(): mixed
```

***

### loadNone

Load a NONE operator

```php
protected loadNone(): mixed
```

***

### loadNewTrue

Load a boolean TRUE operator

```php
protected loadNewTrue(): mixed
```

***

### loadNewFalse

Load a boolean FALSE operator

```php
protected loadNewFalse(): mixed
```

***

### loadInt

Load an integer operator

```php
protected loadInt(): mixed
```

***

### loadBinInt

Load a binary integer operator

```php
protected loadBinInt(): mixed
```

***

### loadBinInt1

Load the first byte of a binary integer

```php
protected loadBinInt1(): mixed
```

***

### loadBinInt2

Load the second byte of a binary integer

```php
protected loadBinInt2(): mixed
```

***

### loadLong

Load a long (float) operator

```php
protected loadLong(): mixed
```

***

### loadLong1

Load a one byte long integer

```php
protected loadLong1(): mixed
```

***

### loadLong4

Load a 4 byte long integer

```php
protected loadLong4(): mixed
```

***

### loadFloat

Load a float value

```php
protected loadFloat(): mixed
```

***

### loadBinFloat

Load a binary float value

```php
protected loadBinFloat(): mixed
```

***

### loadString

Load a string

```php
protected loadString(): mixed
```

***

### loadBinString

Load a binary string

```php
protected loadBinString(): mixed
```

***

### loadShortBinString

Load a short binary string

```php
protected loadShortBinString(): mixed
```

***

### loadBinBytes

Load arbitrary binary bytes

```php
protected loadBinBytes(): mixed
```

***

### loadShortBinBytes

Load a single binary byte

```php
protected loadShortBinBytes(): mixed
```

***

### loadUnicode

Load a unicode string

```php
protected loadUnicode(): mixed
```

***

### _convertMatchingUnicodeSequence2Utf8

Convert a unicode sequence to UTF-8

```php
protected _convertMatchingUnicodeSequence2Utf8(array $match): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$match` | **array** |  |

***

### hex2Utf8

Convert a hex string to a UTF-8 string

```php
protected hex2Utf8(string $hex): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hex` | **string** |  |

***

### loadBinUnicode

Load binary unicode sequence

```php
protected loadBinUnicode(): mixed
```

***

### loadMark

Load a marker sequence

```php
protected loadMark(): mixed
```

***

### loadList

Load an array (list)

```php
protected loadList(): mixed
```

***

### loadAppend

Load an append (to list) sequence

```php
protected loadAppend(): mixed
```

***

### loadEmptyList

Load an empty list sequence

```php
protected loadEmptyList(): mixed
```

***

### loadAppends

Load multiple append (to list) sequences at once

```php
protected loadAppends(): mixed
```

***

### loadDict

Load an associative array (Python dictionary)

```php
protected loadDict(): mixed
```

***

### loadSetItem

Load an item from a set

```php
protected loadSetItem(): mixed
```

***

### _loadEmptyDict

Load an empty dictionary

```php
protected _loadEmptyDict(): mixed
```

***

### loadSetItems

Load set items

```php
protected loadSetItems(): mixed
```

***

### loadTuple

Load a tuple

```php
protected loadTuple(): mixed
```

***

### loadTuple1

Load single item tuple

```php
protected loadTuple1(): mixed
```

***

### loadTuple2

Load two item tuple

```php
protected loadTuple2(): mixed
```

***

### loadTuple3

Load three item tuple

```php
protected loadTuple3(): mixed
```

***

### loadProto

Load a proto value

```php
protected loadProto(): mixed
```

***

### read

Read a segment of the pickle

```php
protected read(mixed $len): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$len` | **mixed** |  |

***

### readline

Read a line of the pickle at once

```php
protected readline(): string
```

***

### unquoteString

Unquote/Unescape a quoted string

```php
protected unquoteString(string $str): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | quoted string |

**Return Value:**

unquoted string



***

### lastMarker

Return last marker position in stack

```php
protected lastMarker(): int
```

***

### decodeBinLong

Decode a binary long sequence

```php
protected decodeBinLong(string $data): int|float|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |

***

## Inherited methods

### __construct

Constructor

```php
public __construct(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |

***

### setOptions

Set adapter options

```php
public setOptions(array|\Traversable|\Zend\Serializer\Adapter\AdapterOptions $options): \Zend\Serializer\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Serializer\Adapter\AdapterOptions** |  |

***

### getOptions

Get adapter options

```php
public getOptions(): \Zend\Serializer\Adapter\AdapterOptions
```

yxorP::get('REQUEST')
