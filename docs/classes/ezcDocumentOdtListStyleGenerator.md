***

# ezcDocumentOdtListStyleGenerator

Class to generate styles for lists (<text:list/>).



* Full name: `\ezcDocumentOdtListStyleGenerator`
* Parent class: [`\ezcDocumentOdtStyleGenerator`](./ezcDocumentOdtStyleGenerator.md)



## Properties


### textStyleGenerator

Text style generator.

```php
protected \ezcDocumentOdtTextStyleGenerator $textStyleGenerator
```






***

### listPropertyGenerator

List property generator.

```php
protected \ezcDocumentOdtStyleListPropertyGenerator $listPropertyGenerator
```






***

### id

List IDs.

```php
protected int $id
```






***

## Methods


### __construct

Creates a new style genertaor.

```php
public __construct(\ezcDocumentOdtPcssConverterManager $styleConverters): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleConverters` | **\ezcDocumentOdtPcssConverterManager** |  |




***

### handles

Returns if the given $odtElement is handled by this generator.

```php
public handles(\DOMElement $odtElement): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |




***

### createStyle

Creates the styles with $styleAttributes for the given $odtElement.

```php
public createStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $odtElement, array $styleAttributes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styleAttributes` | **array** |  |




***

### createListStyle

Creates a style for the <text:list /> element.

```php
protected createListStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $list, array $styleAttributes): void
```

Checks if the list is nested in a different list. If this is not the
case, a new list style is generated. Otherwise, the existing list style
is retrieved and a list definition for the corresponding nesting depth
is created.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$list` | **\DOMElement** |  |
| `$styleAttributes` | **array** |  |




***

### createNewListStyle

Creates a new <text:list-style/> and applies it to the given
$odtElement.

```php
protected createNewListStyle(\DOMElement $odtElement, \ezcDocumentOdtStyleInformation $styleInfo): \DOMElement
```

This method creates and returns a new list style DOMElement in
$styleInfo for $odtElement and assigns its name to the $odtElement. The
list style can then be filled with list properties of different levels.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |




***

### createListLevelStyle

Creates the <text:list-level-style-* /> element for $styleAttributes.

```php
protected createListLevelStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $listStyle, int $level, array $styleAttributes): mixed
```

This method creates a list-level-style in $listStyle for the given list
$level applying $styleAttributes to this list level.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$listStyle` | **\DOMElement** |  |
| `$level` | **int** |  |
| `$styleAttributes` | **array** |  |




***

### calculateListLevelMeasures

Calculates the list margin and indent.

```php
protected calculateListLevelMeasures(\DOMElement $listStyle, int $level, array $styleAttributes): mixed
```

Margin and indent are handled in a strange way in ODF. This method
calculates the margin for a list level, based on the previous level margin
and the current margin and padding. In addition, the text-indent is set
to fit the previous list-level. The new $styleAttributes are returned.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listStyle` | **\DOMElement** |  |
| `$level` | **int** |  |
| `$styleAttributes` | **array** |  |




***

### retrieveListStyle

Returns the <text:list-style> DOMElement assigned to $odtList.

```php
protected retrieveListStyle(\DOMElement $odtList, \ezcDocumentOdtStyleInformation $styleInfo): \DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtList` | **\DOMElement** |  |
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |




***

### getBaseList

Returns the parent <text:list/> element or null.

```php
protected getBaseList(\DOMElement $list, int $depth = 1): array
```

This method returns the parent <text:list/> element for the given $list and the nesting depth of $list,
if it is nested in another list. The returned structure is:

<code>
<?php
 array(
     'base'  => <DOMElement|null>,
     'depth' => <int>
 );
?>
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **\DOMElement** |  |
| `$depth` | **int** |  |




***


## Inherited methods


### __construct

Creates a new style genertaor.

```php
public __construct(\ezcDocumentOdtPcssConverterManager $styleConverters): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleConverters` | **\ezcDocumentOdtPcssConverterManager** |  |




***

### handles

Returns if a style generator handles style generation for $odtElement.

```php
public handles(\DOMElement $odtElement): bool
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtElement` | **\DOMElement** |  |




***

### createStyle

Creates the necessary styles to apply $styleAttributes to $odtElement.

```php
public createStyle(\ezcDocumentOdtStyleInformation $styleInfo, \DOMElement $odtElement, array $styleAttributes): mixed
```

This method should create the necessary styles to apply $styleAttributes
to the given $odtElement. In addition, it must set the correct
attributes on $odtElement to source this style.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styleInfo` | **\ezcDocumentOdtStyleInformation** |  |
| `$odtElement` | **\DOMElement** |  |
| `$styleAttributes` | **array** |  |




***

### getUniqueStyleName

Returns a unique style name with the given $prefix.

```php
protected getUniqueStyleName(string $prefix = &#039;style&#039;): string
```

Note that generated name is only unique within this style generator,
which is no problem, if only a single style generator takes care for a
certain style family.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
