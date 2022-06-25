***

# ezcDocumentPcssStyleInferencer

Style inferencer

Inferences the style of a element, basing on the default styles for the
element and the given list of user defined style directives.

This class is meant to return a list of styles for any element in the
Docbook document tree. To speed up the inferencing process styles for
elements with the same path are cached.

The inferencing algorithm basically works like:

1) Apply the default styles to the element
2) Inherit styles from the parent element
3) Apply styles from all given style directives in their given order, so
   that rules defined later overwrite rules defined earlier.

* Full name: `\ezcDocumentPcssStyleInferencer`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TEXT`|public| |1|
|`LAYOUT`|public| |2|
|`PAGE`|public| |4|

## Properties


### styleCache

Style cache

```php
protected array $styleCache
```

Caches styles for defined paths. This speeds up resolving of styles for
similar or same elements multiple times.




***

### styleDirectives

Ordered list of style directives

```php
protected array $styleDirectives
```

Ordered list of style directvies, which each include the pattern, and a
list of formatting rules. Matching directives are applied in the given
order and may overwrite each other.




***

### valueParserClasses

Special classes for style directive values

```php
protected array $valueParserClasses
```

If no class is given it will fall back to a generic string value.




***

### categories

CSS property categories, used to minimize the amount of returned
properties

```php
protected array $categories
```






***

## Methods


### __construct

Construct style inference with default styles

```php
public __construct(bool $loadDefault = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loadDefault` | **bool** |  |




***

### loadDefaultStyles

Set the default styles

```php
protected loadDefaultStyles(): void
```

Creates a list of default styles for very common elements.









***

### appendStyleDirectives

Append list of style directives

```php
public appendStyleDirectives(array $styleDirectives): void
```

Append another set of style directives. Since style directives are
applied in the given order and may overwrite each other, all given
directives might overwrite existing formatting rules.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleDirectives` | **array** |  |




***

### mergeBoxValues

Merges box values into one single definition

```php
protected mergeBoxValues(array $values): array
```

Merges partial box definitions, like "margin-top", into a single
"margin" definition, so it can be access easier.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### mergeBorderValues

Merges border values into one single definition

```php
protected mergeBorderValues(array $values): array
```

Merges partial border definitions like "border-style" into a single
border definition, which then includes all border properties.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### mergeFormattingRules

Merge formatting rules

```php
protected mergeFormattingRules(array $base, array $new): array
```

Merges two sets of formatting rules, while rules set in the second rule
set will always overwrite existing rules of the same name in the first.
Rules in the first set, not existing in the second will left untouched.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **array** |  |
| `$new` | **array** |  |




***

### filterStyles

Filter the styles

```php
protected filterStyles(array $formats, int $types): array
```

Filter the styles so that only styles of the specified classes are
returned.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formats` | **array** |  |
| `$types` | **int** |  |


**Return Value:**

void



***

### inferenceFormattingRules

Inference formatting rules for element

```php
public inferenceFormattingRules(\ezcDocumentLocateable $element, int $types = -1): array
```

Inference the formatting rules for the passed DOMElement or location id.
First the cache will be checked for already inferenced formatting rules
defined for this element type, using its generated location identifier.

Of not cached, the formatting rules will be inferenced using the
algorithm described in the class header.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateable** |  |
| `$types` | **int** |  |




***

### getDefinitions

Get definition directives of given type

```php
public getDefinitions(string $type): array
```

Returns an array of definition directives, which matches the type passed
as a parameter.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
