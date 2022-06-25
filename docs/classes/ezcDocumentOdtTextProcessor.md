***

# ezcDocumentOdtTextProcessor

Processes text nodes with significant whitespaces.

An instance of this class is used to process DOMText nodes with significant whitespaces (such as literallayout).

* Full name: `\ezcDocumentOdtTextProcessor`

## Methods

### processText

Checks if whitespaces need additional processing and returns the corresponding DOMText for the ODT.

```php
public processText(\DOMText $textNode, \DOMElement $newRoot): array|(\DOMNode)
```

This method checks if the given $textNode is descendant of a
<literallayout /> tag. In this case, whitespaces are processed according to the ODT specs:

- More than 2 simple spaces are replaced by a single space and <text:s /> with the text:c attribute set to the number of
  spaces - 1.
- One or more tabs / line breaks are replaced by a <text:tab/> /
  <text:line-break/> tag, with the text:c attribute set to the number of whitespaces replaced.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textNode` | **\DOMText** |  |
| `$newRoot` | **\DOMElement** |  |

***

### processSpaces

Processes whitespaces in $textNode and returns a fragment for the ODT.

```php
protected processSpaces(\DOMText $textNode, \DOMElement $newRoot): array|(\DOMNode)
```

Processes whitespaces in $textNode according to the rules described at {@link}. Returns a new DOMDocumentFragment,
containing the processed nodes.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textNode` | **\DOMText** |  |
| `$newRoot` | **\DOMElement** |  |

***

### repeatSpace

Generates whitespace elements.

```php
protected repeatSpace(string $spaceType, int $length, \DOMElement $root): array|(\DOMNode)
```

Retruns an array of DOMElement objects, representing $length number of whitespaces of type $spaceType.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spaceType` | **string** |  |
| `$length` | **int** |  |
| `$root` | **\DOMElement** |  |

***

### getMatchType

Returns what type of whitespace was matched.

```php
protected getMatchType(string $string): string
```

Returns a string indicating what type of whitespaces has been matched. This string is also the name of the text:* tag
used to reflect the whitespace in ODT:

- 's' for spaces
- 'tab' for tabs
- 'line-break' for line breaks

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### getParent

Returns the ancestor DOMElement for $node.

```php
protected getParent(\DOMNode $node): \DOMElement
```

Returns the next ancestor DOMElement for $node.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

yxorP::get('REQUEST')
