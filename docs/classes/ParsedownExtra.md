***

# ParsedownExtra





* Full name: `\ParsedownExtra`
* Parent class: [`\Parsedown`](./Parsedown.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`version`|public| |&#039;0.7.0&#039;|

## Properties


### footnoteCount



```php
private $footnoteCount
```






***

### regexAttribute



```php
protected $regexAttribute
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### text



```php
public text(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### blockAbbreviation



```php
protected blockAbbreviation(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockFootnote



```php
protected blockFootnote(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockFootnoteContinue



```php
protected blockFootnoteContinue(mixed $Line, mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **mixed** |  |




***

### blockFootnoteComplete



```php
protected blockFootnoteComplete(mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Block` | **mixed** |  |




***

### blockDefinitionList



```php
protected blockDefinitionList(mixed $Line, mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **mixed** |  |




***

### blockDefinitionListContinue



```php
protected blockDefinitionListContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockHeader



```php
protected blockHeader(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockMarkupComplete



```php
protected blockMarkupComplete(mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Block` | **mixed** |  |




***

### blockSetextHeader



```php
protected blockSetextHeader(mixed $Line, array $Block = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### inlineFootnoteMarker



```php
protected inlineFootnoteMarker(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineLink



```php
protected inlineLink(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### unmarkedText



```php
protected unmarkedText(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### addDdElement



```php
protected addDdElement(array $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **array** |  |
| `$Block` | **array** |  |




***

### buildFootnoteElement



```php
protected buildFootnoteElement(): mixed
```











***

### parseAttributeData



```php
protected parseAttributeData(mixed $attributeString): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeString` | **mixed** |  |




***

### processTag



```php
protected processTag(mixed $elementMarkup): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elementMarkup` | **mixed** |  |




***

### sortFootnotes



```php
protected sortFootnotes(mixed $A, mixed $B): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$A` | **mixed** |  |
| `$B` | **mixed** |  |




***


## Inherited methods


### text



```php
public text(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### setBreaksEnabled



```php
public setBreaksEnabled(mixed $breaksEnabled): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$breaksEnabled` | **mixed** |  |




***

### setMarkupEscaped



```php
public setMarkupEscaped(mixed $markupEscaped): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$markupEscaped` | **mixed** |  |




***

### setUrlsLinked



```php
public setUrlsLinked(mixed $urlsLinked): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$urlsLinked` | **mixed** |  |




***

### setSafeMode



```php
public setSafeMode(mixed $safeMode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$safeMode` | **mixed** |  |




***

### lines



```php
protected lines(array $lines): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **array** |  |




***

### isBlockContinuable



```php
protected isBlockContinuable(mixed $Type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Type` | **mixed** |  |




***

### isBlockCompletable



```php
protected isBlockCompletable(mixed $Type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Type` | **mixed** |  |




***

### blockCode



```php
protected blockCode(mixed $Line, mixed $Block = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **mixed** |  |




***

### blockCodeContinue



```php
protected blockCodeContinue(mixed $Line, mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **mixed** |  |




***

### blockCodeComplete



```php
protected blockCodeComplete(mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Block` | **mixed** |  |




***

### blockComment



```php
protected blockComment(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockCommentContinue



```php
protected blockCommentContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockFencedCode



```php
protected blockFencedCode(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockFencedCodeContinue



```php
protected blockFencedCodeContinue(mixed $Line, mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **mixed** |  |




***

### blockFencedCodeComplete



```php
protected blockFencedCodeComplete(mixed $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Block` | **mixed** |  |




***

### blockHeader



```php
protected blockHeader(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockList



```php
protected blockList(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockListContinue



```php
protected blockListContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockListComplete



```php
protected blockListComplete(array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Block` | **array** |  |




***

### blockQuote



```php
protected blockQuote(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockQuoteContinue



```php
protected blockQuoteContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockRule



```php
protected blockRule(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockSetextHeader



```php
protected blockSetextHeader(mixed $Line, array $Block = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockMarkup



```php
protected blockMarkup(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockMarkupContinue



```php
protected blockMarkupContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockReference



```php
protected blockReference(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### blockTable



```php
protected blockTable(mixed $Line, array $Block = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### blockTableContinue



```php
protected blockTableContinue(mixed $Line, array $Block): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |
| `$Block` | **array** |  |




***

### paragraph



```php
protected paragraph(mixed $Line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Line` | **mixed** |  |




***

### line



```php
public line(mixed $text, mixed $nonNestables = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$nonNestables` | **mixed** |  |




***

### inlineCode



```php
protected inlineCode(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineEmailTag



```php
protected inlineEmailTag(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineEmphasis



```php
protected inlineEmphasis(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineEscapeSequence



```php
protected inlineEscapeSequence(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineImage



```php
protected inlineImage(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineLink



```php
protected inlineLink(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineMarkup



```php
protected inlineMarkup(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineSpecialCharacter



```php
protected inlineSpecialCharacter(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineStrikethrough



```php
protected inlineStrikethrough(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineUrl



```php
protected inlineUrl(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### inlineUrlTag



```php
protected inlineUrlTag(mixed $Excerpt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Excerpt` | **mixed** |  |




***

### unmarkedText



```php
protected unmarkedText(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### element



```php
protected element(array $Element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Element` | **array** |  |




***

### elements



```php
protected elements(array $Elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Elements` | **array** |  |




***

### li



```php
protected li(mixed $lines): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **mixed** |  |




***

### parse



```php
public parse(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### sanitiseElement



```php
protected sanitiseElement(array $Element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Element` | **array** |  |




***

### filterUnsafeUrlInAttribute



```php
protected filterUnsafeUrlInAttribute(array $Element, mixed $attribute): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Element` | **array** |  |
| `$attribute` | **mixed** |  |




***

### escape



```php
protected static escape(mixed $text, mixed $allowQuotes = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$allowQuotes` | **mixed** |  |




***

### striAtStart



```php
protected static striAtStart(mixed $string, mixed $needle): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |
| `$needle` | **mixed** |  |




***

### instance



```php
public static instance(mixed $name = &#039;default&#039;): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
