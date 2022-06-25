***

# Json

Class for encoding to and decoding from JSON.

* Full name: `\Zend\Json\Json`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_ARRAY`|public| |1|
|`TYPE_OBJECT`|public| |0|

## Properties

### maxRecursionDepthAllowed

To check the allowed nesting depth of the XML tree during xml2json conversion.

```php
public static int $maxRecursionDepthAllowed
```

* This property is **static**.

***

### useBuiltinEncoderDecoder

```php
public static bool $useBuiltinEncoderDecoder
```

* This property is **static**.

***

## Methods

### decode

Decodes the given $encodedValue string which is encoded in the JSON format

```php
public static decode(string $encodedValue, int $objectDecodeType = self::TYPE_OBJECT): mixed
```

Uses ext/json's json_decode if available.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encodedValue` | **string** | Encoded in JSON format |
| `$objectDecodeType` | **int** | Optional; flag indicating how to decode<br />objects. See {@link} for details. |

***

### encode

Encode the mixed $valueToEncode into the JSON format

```php
public static encode(mixed $valueToEncode, bool $cycleCheck = false, array $options = []): string
```

Encodes using ext/json's json_encode() if available.

NOTE: Object should not contain cycles; the JSON format does not allow object reference.

NOTE: Only public variables will be encoded

NOTE: Encoding native javascript expressions are possible using Zend\Json\Expr. You can enable this by setting
$options['enableJsonExprFinder'] = true

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueToEncode` | **mixed** |  |
| `$cycleCheck` | **bool** | Optional; whether or not to check for object recursion; off by default |
| `$options` | **array** | Additional options used during encoding |

**Return Value:**

JSON encoded object

**See Also:**

* \Zend\Json\Zend\Json\Expr -

***

### _recursiveJsonExprFinder

Check & Replace Zend\Json\Expr for tmp ids in the valueToEncode

```php
protected static _recursiveJsonExprFinder(mixed& $value, array& $javascriptExpressions, null|string|int $currentKey = null): mixed
```

Check if the value is a Zend\Json\Expr, and if replace its value with a magic key and save the javascript expression in
an array.

NOTE this method is recursive.

NOTE: This method is used internally by the encode method.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | a string - object property to be encoded |
| `$javascriptExpressions` | **array** |  |
| `$currentKey` | **null&#124;string&#124;int** |  |

**See Also:**

* \Zend\Json\encode -

***

### _getXmlValue

Return the value of an XML attribute text or the text between the XML tags

```php
protected static _getXmlValue(\SimpleXMLElement $simpleXmlElementObject): \Zend\Json\Expr|string
```

In order to allow Zend\Json\Expr from xml, we check if the node matches the pattern that try to detect if it is a new
Zend\Json\Expr if it matches, we return a new Zend\Json\Expr instead of a text node

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$simpleXmlElementObject` | **\SimpleXMLElement** |  |

***

### _processXml

_processXml - Contains the logic for xml2json

```php
protected static _processXml(\SimpleXMLElement $simpleXmlElementObject, bool $ignoreXmlAttributes, int $recursionDepth): array
```

The logic in this function is a recursive one.

The main caller of this function (i.e. fromXml) needs to provide only the first two parameters i.e. the SimpleXMLElement
object and the flag for ignoring or not ignoring XML attributes. The third parameter will be used internally within this
function during the recursive calls.

This function converts the SimpleXMLElement object into a PHP array by calling a recursive (protected static) function
in this class. Once all the XML elements are stored in the PHP array, it is returned to the caller.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$simpleXmlElementObject` | **\SimpleXMLElement** |  |
| `$ignoreXmlAttributes` | **bool** |  |
| `$recursionDepth` | **int** |  |

***

### fromXml

```php
public static fromXml(string $xmlStringContents, bool $ignoreXmlAttributes = true): mixed
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xmlStringContents` | **string** | XML String to be converted |
| `$ignoreXmlAttributes` | **bool** | Include or exclude XML attributes in<br />the xml2json conversion process. |

**Return Value:**

- JSON formatted string on success

***

### prettyPrint

Pretty-print JSON string

```php
public static prettyPrint(string $json, array $options = []): string
```

Use 'indent' option to select indentation string - by default it's a tab

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** | Original JSON string |
| `$options` | **array** | Encoding options |

yxorP::get('REQUEST')
