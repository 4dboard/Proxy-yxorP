***

# SVGSanitizer





* Full name: `\SVGSanitizer`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SCRIPT_REGEX`|public| |&#039;/(?:\\w+script|data):/xi&#039;|

## Properties


### xmlDocument



```php
protected $xmlDocument
```






***

### allowedTags



```php
protected $allowedTags
```






***

### allowedAttrs



```php
protected $allowedAttrs
```






***

### xmlLoaderValue



```php
protected $xmlLoaderValue
```






***

### minifyXML



```php
protected $minifyXML
```






***

### removeRemoteReferences



```php
protected $removeRemoteReferences
```






***

### removeXMLTag



```php
protected $removeXMLTag
```






***

### xmlOptions



```php
protected $xmlOptions
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### clean



```php
public static clean(mixed $svgText): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$svgText` | **mixed** |  |




***

### sanitize



```php
public sanitize(mixed $dirty): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirty` | **mixed** |  |




***

### resetInternal



```php
protected resetInternal(): mixed
```











***

### setUpBefore



```php
protected setUpBefore(): mixed
```











***

### resetAfter



```php
protected resetAfter(): mixed
```











***

### removeDoctype



```php
protected removeDoctype(): mixed
```











***

### startClean



```php
protected startClean(\DOMNodeList $elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **\DOMNodeList** |  |




***

### cleanAttributesOnWhitelist



```php
protected cleanAttributesOnWhitelist(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### isAriaAttribute



```php
protected isAriaAttribute(mixed $attributeName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **mixed** |  |




***

### isDataAttribute



```php
protected isDataAttribute(mixed $attributeName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **mixed** |  |




***

### hasRemoteReference



```php
protected hasRemoteReference(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### removeNonPrintableCharacters



```php
protected removeNonPrintableCharacters(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### cleanXlinkHrefs



```php
protected cleanXlinkHrefs(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### cleanHrefs



```php
protected cleanHrefs(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### isUseTagDirty



```php
protected isUseTagDirty(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### getXMLOptions



```php
public getXMLOptions(): mixed
```











***

### setXMLOptions



```php
public setXMLOptions(mixed $xmlOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xmlOptions` | **mixed** |  |




***

### getAllowedTags



```php
public getAllowedTags(): mixed
```











***

### setAllowedTags



```php
public setAllowedTags(mixed $allowedTags): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowedTags` | **mixed** |  |




***

### getAllowedAttrs



```php
public getAllowedAttrs(): mixed
```











***

### setAllowedAttrs



```php
public setAllowedAttrs(mixed $allowedAttrs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowedAttrs` | **mixed** |  |




***

### removeRemoteReferences



```php
public removeRemoteReferences(mixed $removeRemoteRefs = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$removeRemoteRefs` | **mixed** |  |




***

### minify



```php
public minify(mixed $shouldMinify = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shouldMinify` | **mixed** |  |




***

### removeXMLTag



```php
public removeXMLTag(mixed $removeXMLTag = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$removeXMLTag` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
