***

# SVGSanitizer

Class SVGSanitizer

simplified/compact version of svg-sanitizer - https://github.com/darylldoyle/svg-sanitizer by Daryll Doyle

* Full name: `\SVGSanitizer`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SCRIPT_REGEX`|public| |&#039;/(?:\\w+script|data):/xi&#039;|

## Properties


### xmlDocument



```php
protected \DOMDocument $xmlDocument
```






***

### allowedTags



```php
protected array $allowedTags
```






***

### allowedAttrs



```php
protected array $allowedAttrs
```






***

### xmlLoaderValue



```php
protected $xmlLoaderValue
```






***

### minifyXML



```php
protected bool $minifyXML
```






***

### removeRemoteReferences



```php
protected bool $removeRemoteReferences
```






***

### removeXMLTag



```php
protected bool $removeXMLTag
```






***

### xmlOptions



```php
protected int $xmlOptions
```






***

## Methods


### clean

SVGSanitizer::clean('<svg ...>')

```php
public static clean(mixed $svgText): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$svgText` | **mixed** |  |




***

### __construct



```php
public __construct(): mixed
```











***

### resetInternal

Set up the DOMDocument

```php
protected resetInternal(): mixed
```











***

### setXMLOptions

Set XML options to use when saving XML
See: DOMDocument::saveXML

```php
public setXMLOptions(int $xmlOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xmlOptions` | **int** |  |




***

### getXMLOptions

Get XML options to use when saving XML
See: DOMDocument::saveXML

```php
public getXMLOptions(): int
```











***

### getAllowedTags

Get the array of allowed tags

```php
public getAllowedTags(): array
```











***

### setAllowedTags

Set custom allowed tags

```php
public setAllowedTags(array $allowedTags): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowedTags` | **array** |  |




***

### getAllowedAttrs

Get the array of allowed attributes

```php
public getAllowedAttrs(): array
```











***

### setAllowedAttrs

Set custom allowed attributes

```php
public setAllowedAttrs(array $allowedAttrs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowedAttrs` | **array** |  |




***

### removeRemoteReferences

Should we remove references to remote files?

```php
public removeRemoteReferences(bool $removeRemoteRefs = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$removeRemoteRefs` | **bool** |  |




***

### sanitize

Sanitize the passed string

```php
public sanitize(string $dirty): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirty` | **string** |  |




***

### setUpBefore

Set up libXML before we start

```php
protected setUpBefore(): mixed
```











***

### resetAfter

Reset the class after use

```php
protected resetAfter(): mixed
```











***

### removeDoctype

Remove the XML Doctype
It may be caught later on output but that seems to be buggy, so we need to make sure it's gone

```php
protected removeDoctype(): mixed
```











***

### startClean

Start the cleaning with tags, then we move onto attributes and hrefs later

```php
protected startClean(\DOMNodeList $elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **\DOMNodeList** |  |




***

### cleanAttributesOnWhitelist

Only allow attributes that are on the whitelist

```php
protected cleanAttributesOnWhitelist(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### cleanXlinkHrefs

Clean the xlink:hrefs of script and data embeds

```php
protected cleanXlinkHrefs(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### cleanHrefs

Clean the hrefs of script and data embeds

```php
protected cleanHrefs(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### removeNonPrintableCharacters

Removes non-printable ASCII characters from string & trims it

```php
protected removeNonPrintableCharacters(string $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### hasRemoteReference

Does this attribute value have a remote reference?

```php
protected hasRemoteReference( $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |




***

### minify

Should we minify the output?

```php
public minify(bool $shouldMinify = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shouldMinify` | **bool** |  |




***

### removeXMLTag

Should we remove the XML tag in the header?

```php
public removeXMLTag(bool $removeXMLTag = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$removeXMLTag` | **bool** |  |




***

### isAriaAttribute

Check to see if an attribute is an aria attribute or not

```php
protected isAriaAttribute( $attributeName): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **** |  |




***

### isDataAttribute

Check to see if an attribute is an data attribute or not

```php
protected isDataAttribute( $attributeName): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **** |  |




***

### isUseTagDirty

Make sure our use tag is only referencing internal resources

```php
protected isUseTagDirty(\DOMElement $element): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***


***

