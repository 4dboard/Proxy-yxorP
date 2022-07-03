***

# Spyc

The Simple PHP YAML Class.

This class can be used to read a YAML file and convert its contents
into a PHP array.  It currently supports a very limited subsection of
the YAML spec.

Usage:
<code>
  $Spyc  = new Spyc;
  $array = $Spyc->load($file);
</code>
or:
<code>
  $array = Spyc::YAMLLoad($file);
</code>
or:
<code>
  $array = spyc_load_file($file);
</code>

* Full name: `\Spyc`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REMPTY`|public| |&quot;\x00\x00\x00\x00\x00&quot;|

## Properties


### setting_dump_force_quotes

Setting this to true will force YAMLDump to enclose any string value in
quotes.  False by default.

```php
public bool $setting_dump_force_quotes
```






***

### setting_use_syck_is_possible

Setting this to true will forse YAMLLoad to use syck_load function when
possible. False by default.

```php
public bool $setting_use_syck_is_possible
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

Path modifier that should be applied after adding current element.

```php
private array $delayedPath
```






***

### _nodeId



```php
public $_nodeId
```






***

## Methods


### load

Load a valid YAML string to Spyc.

```php
public load(string $input): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** |  |




***

### loadFile

Load a valid YAML file to Spyc.

```php
public loadFile(string $file): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### YAMLLoad

Load YAML into a PHP array statically

```php
public static YAMLLoad(string $input): array
```

The load method, when supplied with a YAML stream (string or file),
will do its best to convert YAML in a file into a PHP array.  Pretty
simple.
 Usage:
 <code>
  $array = Spyc::YAMLLoad('lucky.yaml');
  print_r($array);
 </code>

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | Path of YAML file or string containing YAML |




***

### YAMLLoadString

Load a string of YAML into a PHP array statically

```php
public static YAMLLoadString(string $input): array
```

The load method, when supplied with a YAML string, will do its best
to convert YAML in a string into a PHP array.  Pretty simple.

Note: use this function if you don't want files from the file system
loaded and processed as YAML.  This is of interest to people concerned
about security whose input is from a string.

 Usage:
 <code>
  $array = Spyc::YAMLLoadString("---\n0: hello world\n");
  print_r($array);
 </code>

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | String containing YAML |




***

### YAMLDump

Dump YAML from PHP array statically

```php
public static YAMLDump(array|\stdClass $array, int $indent = false, int $wordwrap = false, bool $no_opening_dashes = false): string
```

The dump method, when supplied with an array, will do its best
to convert the array into friendly YAML.  Pretty simple.  Feel free to
save the returned string as nothing.yaml and pass it around.

Oh, and you can decide how big the indent is and what the wordwrap
for folding is.  Pretty cool -- just pass in 'false' for either if
you want to use the default.

Indent's default is 2 spaces, wordwrap's default is 40 characters.  And
you can turn off wordwrap by passing in 0.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array&#124;\stdClass** | PHP array |
| `$indent` | **int** | Pass in false to use the default, which is 2 |
| `$wordwrap` | **int** | Pass in 0 for no wordwrap, false for default (40) |
| `$no_opening_dashes` | **bool** | Do not start YAML file with &quot;---\n&quot; |




***

### dump

Dump PHP array to YAML

```php
public dump(array $array, int $indent = false, int $wordwrap = false, mixed $no_opening_dashes = false): string
```

The dump method, when supplied with an array, will do its best
to convert the array into friendly YAML.  Pretty simple.  Feel free to
save the returned string as tasteful.yaml and pass it around.

Oh, and you can decide how big the indent is and what the wordwrap
for folding is.  Pretty cool -- just pass in 'false' for either if
you want to use the default.

Indent's default is 2 spaces, wordwrap's default is 40 characters.  And
you can turn off wordwrap by passing in 0.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | PHP array |
| `$indent` | **int** | Pass in false to use the default, which is 2 |
| `$wordwrap` | **int** | Pass in 0 for no wordwrap, false for default (40) |
| `$no_opening_dashes` | **mixed** |  |




***

### _yamlize

Attempts to convert a key / value array item to YAML

```php
private _yamlize( $key,  $value,  $indent, mixed $previous_key = -1, mixed $first_key, mixed $source_array = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** | The name of the key |
| `$value` | **** | The value of the item |
| `$indent` | **** | The indent of the current node |
| `$previous_key` | **mixed** |  |
| `$first_key` | **mixed** |  |
| `$source_array` | **mixed** |  |




***

### _yamlizeArray

Attempts to convert an array to YAML

```php
private _yamlizeArray( $array,  $indent): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** | The array you want to convert |
| `$indent` | **** | The indent of the current level |




***

### _dumpNode

Returns YAML from a key and a value

```php
private _dumpNode( $key,  $value,  $indent, mixed $previous_key = -1, mixed $first_key, mixed $source_array = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** | The name of the key |
| `$value` | **** | The value of the item |
| `$indent` | **** | The indent of the current node |
| `$previous_key` | **mixed** |  |
| `$first_key` | **mixed** |  |
| `$source_array` | **mixed** |  |




***

### _doLiteralBlock

Creates a literal block for dumping

```php
private _doLiteralBlock( $value,  $indent): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |
| `$indent` | **** | int The value of the indent |




***

### _doFolding

Folds a string of text, if necessary

```php
private _doFolding( $value, mixed $indent): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** | The string you wish to fold |
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

Coerce a string into a native type
Reference: http://yaml.org/type/bool.html
TODO: Use only words from the YAML spec.

```php
private coerceValue(& $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** | The value to coerce |




***

### getTranslations

Given a set of words, perform the appropriate translations on them to
match the YAML 1.1 specification for type coercing.

```php
private static getTranslations( $words): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$words` | **** | The words to translate |




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

Parses YAML code and returns an array for a node

```php
private _parseLine(string $line): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **string** | A line from the YAML file |




***

### _toType

Finds the type of the passed value, returns the value as the new type.

```php
private _toType(string $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### _inlineEscape

Used in inlines to check for more inlines or quoted strings

```php
private _inlineEscape(mixed $inline): array
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
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
