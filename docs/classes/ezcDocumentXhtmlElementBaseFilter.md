***

# ezcDocumentXhtmlElementBaseFilter

Filter for XHTML elements.



* Full name: `\ezcDocumentXhtmlElementBaseFilter`
* This class is an **Abstract class**




## Methods


### filterElement

Filter a single element

```php
public filterElement(\DOMElement $element): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### handles

Check if filter handles the current element

```php
public handles(\DOMElement $element): void
```

Returns a boolean value, indicating weather this filter can handle
the current element.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### isBlockLevelElement

Is block level element

```php
protected isBlockLevelElement(\DOMElement $element): bool
```

Returns true, if the element is a block level element in XHtml, and
false otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### isInlineElement

Check if node is an inline element

```php
protected isInlineElement(\DOMNode $node): bool
```

Check if the passed node is an inline element, eg. may occur inside a
text block, like a paragraph.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |




***

### isInline

Is current element placed inline

```php
protected isInline(\DOMElement $element): void
```

Checks if the current element is placed inline, which means, it is
either a descendant of some other inline element, or part of a
paragraph.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### hasClass

Check for element class

```php
protected hasClass(\DOMElement $element, string $class): bool
```

Check if element has the given class in its class attribute. Returns
true, if it is contained, or false, if not.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |
| `$class` | **string** |  |




***

### showCurrentNode

Shows a string representation of the current node.

```php
protected showCurrentNode(\DOMElement $element, bool $newLine = true): mixed
```

Is only there for debugging purposes






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |
| `$newLine` | **bool** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
