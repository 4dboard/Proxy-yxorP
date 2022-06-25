***

# FileReflector

Reflection class for a full file.



* Full name: `\phpDocumentor\Reflection\FileReflector`
* Parent class: [`\phpDocumentor\Reflection\ReflectionAbstract`](./ReflectionAbstract.md)
* This class implements:
[`\PhpParser\NodeVisitor`](../../PhpParser/NodeVisitor.md)

**See Also:**

* http://phpdoc.org - 



## Properties


### hash



```php
protected string $hash
```






***

### contents



```php
protected string $contents
```






***

### includes



```php
protected \phpDocumentor\Reflection\IncludeReflector[] $includes
```






***

### constants



```php
protected \phpDocumentor\Reflection\ConstantReflector[] $constants
```






***

### classes



```php
protected \phpDocumentor\Reflection\ClassReflector[] $classes
```






***

### traits



```php
protected \phpDocumentor\Reflection\TraitReflector[] $traits
```






***

### interfaces



```php
protected \phpDocumentor\Reflection\InterfaceReflector[] $interfaces
```






***

### functions



```php
protected \phpDocumentor\Reflection\FunctionReflector[] $functions
```






***

### filename



```php
protected string $filename
```






***

### doc_block



```php
protected \phpDocumentor\Reflection\DocBlock $doc_block
```






***

### default_package_name



```php
protected string $default_package_name
```






***

### markers



```php
protected string[] $markers
```






***

### parse_markers



```php
protected string[] $parse_markers
```






***

### marker_terms



```php
protected string[] $marker_terms
```






***

### context

The context (namespace, aliases) for the reflection.

```php
protected \phpDocumentor\Reflection\DocBlock\Context $context
```






***

## Methods


### __construct

Opens the file and retrieves its contents.

```php
public __construct(string $file, bool $validate = false, string $encoding = &#039;utf-8&#039;): mixed
```

During construction the given file is checked whether it is readable and
if the $validate argument is true a PHP Lint action is executed to
check whether the there are no parse errors.

By default the Lint check is disabled because of the performance hit
introduced by this action.

If the validation checks out, the file's contents are read, converted to
UTF-8 and the object is created from those contents.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | Name of the file. |
| `$validate` | **bool** | Whether to check the file using PHP Lint. |
| `$encoding` | **string** | The encoding of the file. |




***

### process



```php
public process(): mixed
```











***

### getClasses



```php
public getClasses(): \phpDocumentor\Reflection\ClassReflector[]
```











***

### getTraits



```php
public getTraits(): \phpDocumentor\Reflection\TraitReflector[]
```











***

### getConstants



```php
public getConstants(): \phpDocumentor\Reflection\ConstantReflector[]
```











***

### getFunctions



```php
public getFunctions(): \phpDocumentor\Reflection\FunctionReflector[]
```











***

### getIncludes



```php
public getIncludes(): \phpDocumentor\Reflection\IncludeReflector[]
```











***

### getInterfaces



```php
public getInterfaces(): \phpDocumentor\Reflection\InterfaceReflector[]
```











***

### beforeTraverse

Called once before traversal.

```php
public beforeTraverse(array $nodes): null|\PhpParser\Node[]
```

Return value semantics:
* null:      $nodes stays as-is
* otherwise: $nodes is set to the return value






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Array of nodes |


**Return Value:**

Array of nodes



***

### isNodeDocumentable

Checks whether the given node is recogized by phpDocumentor as a
documentable element.

```php
protected isNodeDocumentable(\PhpParser\Node $node): bool
```

The following elements are recognized:

- Trait
- Class
- Interface
- Class constant
- Class method
- Property
- Include/Require
- Constant, both const and define
- Function






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** |  |




***

### enterNode

Called when entering a node.

```php
public enterNode(\PhpParser\Node $node): null|\PhpParser\Node
```

Return value semantics:
* null:      $node stays as-is
* otherwise: $node is set to the return value






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node |


**Return Value:**

Node



***

### getName



```php
public getName(): mixed
```











***

### getFilename



```php
public getFilename(): mixed
```











***

### getHash



```php
public getHash(): mixed
```











***

### getDocBlock



```php
public getDocBlock(): mixed
```











***

### getLineNumber



```php
public getLineNumber(): mixed
```











***

### getDefaultPackageName



```php
public getDefaultPackageName(): mixed
```











***

### addMarker

Adds a marker to scan the contents of this file for.

```php
public addMarker(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The Marker term, e.g. FIXME or TODO. |




***

### setMarkers

Sets a list of markers to search for.

```php
public setMarkers(string[] $markers): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$markers` | **string[]** | A list of marker terms to scan for. |



**See Also:**

* \phpDocumentor\Reflection\phpDocumentor\Reflection\FileReflector::addMarker() - 

***

### getMarkers



```php
public getMarkers(): mixed
```











***

### addParserMarker

Adds a parse error to the system

```php
public addParserMarker(\phpDocumentor\Parser\Event\LogEvent $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Parser\Event\LogEvent** | Contains the type,<br />message, line and code element. |




***

### scanForMarkers

Scans the file for markers and records them in the markers property.

```php
public scanForMarkers(): void
```










**See Also:**

* \phpDocumentor\Reflection\getMarkers() - 

***

### getParseErrors



```php
public getParseErrors(): mixed
```











***

### getNamespace



```php
public getNamespace(): mixed
```











***

### getNamespaceAliases



```php
public getNamespaceAliases(): mixed
```











***

### getContents



```php
public getContents(): mixed
```











***

### setDefaultPackageName



```php
public setDefaultPackageName(mixed $default_package_name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default_package_name` | **mixed** |  |




***

### setFilename



```php
public setFilename(mixed $filename): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |




***

### leaveNode

Called when leaving a node.

```php
public leaveNode(\PhpParser\Node $node): null|\PhpParser\Node|false|\PhpParser\Node[]
```

Return value semantics:
* null:      $node stays as-is
* false:     $node is removed from the parent array
* array:     The return value is merged into the parent array (at the position of the $node)
* otherwise: $node is set to the return value






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node |


**Return Value:**

Node



***

### afterTraverse

Called once after traversal.

```php
public afterTraverse(array $nodes): null|\PhpParser\Node[]
```

Return value semantics:
* null:      $nodes stays as-is
* otherwise: $nodes is set to the return value






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Array of nodes |


**Return Value:**

Array of nodes



***


## Inherited methods


### log

Dispatches a logging request.

```php
public log(string $message, int $priority = 6): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **int** | The logging priority, the lower,<br />the more important. Ranges from 1 to 7 |




***

### debug

Dispatches a logging request to log a debug message.

```php
public debug(string $message): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
