***

# Spyc





* Full name: `\Spyc`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REMPTY`|public| |&quot;\x00\x00\x00\x00\x00&quot;|

## Properties


### setting_dump_force_quotes



```php
public $setting_dump_force_quotes
```






***

### setting_use_syck_is_possible



```php
public $setting_use_syck_is_possible
```






***

### _dumpIndent



```php
private $_dumpIndent
```






***

### _dumpWordWrap



```php
private $_dumpWordWrap
```






***

### _containsGroupAnchor



```php
private $_containsGroupAnchor
```






***

### _containsGroupAlias



```php
private $_containsGroupAlias
```






***

### path



```php
private $path
```






***

### result



```php
private $result
```






***

### LiteralPlaceHolder



```php
private $LiteralPlaceHolder
```






***

### SavedGroups



```php
private $SavedGroups
```






***

### indent



```php
private $indent
```






***

### delayedPath



```php
private $delayedPath
```






***

### _nodeId



```php
public $_nodeId
```






***

## Methods


### load



```php
public load(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### loadFile



```php
public loadFile(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***

### YAMLLoad



```php
public static YAMLLoad(mixed $input): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### YAMLLoadString



```php
public static YAMLLoadString(mixed $input): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### YAMLDump



```php
public static YAMLDump(mixed $array, mixed $indent = false, mixed $wordwrap = false, mixed $no_opening_dashes = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |
| `$indent` | **mixed** |  |
| `$wordwrap` | **mixed** |  |
| `$no_opening_dashes` | **mixed** |  |




***

### dump



```php
public dump(mixed $array, mixed $indent = false, mixed $wordwrap = false, mixed $no_opening_dashes = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |
| `$indent` | **mixed** |  |
| `$wordwrap` | **mixed** |  |
| `$no_opening_dashes` | **mixed** |  |




***

### _yamlize



```php
private _yamlize(mixed $key, mixed $value, mixed $indent, mixed $previous_key = -1, mixed $first_key, mixed $source_array = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$indent` | **mixed** |  |
| `$previous_key` | **mixed** |  |
| `$first_key` | **mixed** |  |
| `$source_array` | **mixed** |  |




***

### _yamlizeArray



```php
private _yamlizeArray(mixed $array, mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### _dumpNode



```php
private _dumpNode(mixed $key, mixed $value, mixed $indent, mixed $previous_key = -1, mixed $first_key, mixed $source_array = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$indent` | **mixed** |  |
| `$previous_key` | **mixed** |  |
| `$first_key` | **mixed** |  |
| `$source_array` | **mixed** |  |




***

### _doLiteralBlock



```php
private _doLiteralBlock(mixed $value, mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### _doFolding



```php
private _doFolding(mixed $value, mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### isTrueWord



```php
private isTrueWord(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isFalseWord



```php
private isFalseWord(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isNullWord



```php
private isNullWord(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isTranslationWord



```php
private isTranslationWord(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### coerceValue



```php
private coerceValue(mixed& $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getTranslations



```php
private static getTranslations(array $words): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$words` | **array** |  |




***

### _load



```php
private _load(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### _loadString



```php
private _loadString(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### loadWithSource



```php
private loadWithSource(mixed $Source): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$Source` | **mixed** |  |




***

### loadFromSource



```php
private loadFromSource(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### loadFromString



```php
private loadFromString(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### _parseLine



```php
private _parseLine(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### _toType



```php
private _toType(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### _inlineEscape



```php
private _inlineEscape(mixed $inline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inline` | **mixed** |  |




***

### literalBlockContinues



```php
private literalBlockContinues(mixed $line, mixed $lineIndent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$lineIndent` | **mixed** |  |




***

### referenceContentsByAlias



```php
private referenceContentsByAlias(mixed $alias): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **mixed** |  |




***

### addArrayInline



```php
private addArrayInline(mixed $array, mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### addArray



```php
private addArray(mixed $incoming_data, mixed $incoming_indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$incoming_data` | **mixed** |  |
| `$incoming_indent` | **mixed** |  |




***

### startsLiteralBlock



```php
private static startsLiteralBlock(mixed $line): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### greedilyNeedNextLine



```php
private static greedilyNeedNextLine(mixed $line): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### addLiteralLine



```php
private addLiteralLine(mixed $literalBlock, mixed $line, mixed $literalBlockStyle, mixed $indent = -1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$literalBlock` | **mixed** |  |
| `$line` | **mixed** |  |
| `$literalBlockStyle` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### revertLiteralPlaceHolder



```php
public revertLiteralPlaceHolder(mixed $lineArray, mixed $literalBlock): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineArray` | **mixed** |  |
| `$literalBlock` | **mixed** |  |




***

### stripIndent



```php
private static stripIndent(mixed $line, mixed $indent = -1): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$indent` | **mixed** |  |




***

### getParentPathByIndent



```php
private getParentPathByIndent(mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indent` | **mixed** |  |




***

### clearBiggerPathValues



```php
private clearBiggerPathValues(mixed $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indent` | **mixed** |  |




***

### isComment



```php
private static isComment(mixed $line): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### isEmpty



```php
private static isEmpty(mixed $line): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### isArrayElement



```php
private isArrayElement(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### isHashElement



```php
private isHashElement(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### isLiteral



```php
private isLiteral(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### unquote



```php
private static unquote(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### startsMappedSequence



```php
private startsMappedSequence(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### returnMappedSequence



```php
private returnMappedSequence(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### checkKeysInValue



```php
private checkKeysInValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### returnMappedValue



```php
private returnMappedValue(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### startsMappedValue



```php
private startsMappedValue(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### isPlainArray



```php
private isPlainArray(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### returnPlainArray



```php
private returnPlainArray(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### returnKeyValuePair



```php
private returnKeyValuePair(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### returnArrayElement



```php
private returnArrayElement(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### nodeContainsGroup



```php
private nodeContainsGroup(mixed $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### addGroup



```php
private addGroup(mixed $line, mixed $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$group` | **mixed** |  |




***

### stripGroup



```php
private stripGroup(mixed $line, mixed $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$group` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
