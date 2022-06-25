***

# Xml

Converts the structural information of phpDocumentor into an XML file.



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../../Transformer/Writer/WriterAbstract.md)
* This class implements:
[`\phpDocumentor\Transformer\Writer\Translatable`](../../../../Transformer/Writer/Translatable.md)



## Properties


### xml



```php
protected \DOMDocument $xml
```






***

### translator



```php
protected \phpDocumentor\Translator\Translator $translator
```






***

### docBlockConverter



```php
protected $docBlockConverter
```






***

### argumentConverter



```php
protected $argumentConverter
```






***

### methodConverter



```php
protected $methodConverter
```






***

### propertyConverter



```php
protected $propertyConverter
```






***

### constantConverter



```php
protected $constantConverter
```






***

### interfaceConverter



```php
protected $interfaceConverter
```






***

### traitConverter



```php
protected $traitConverter
```






***

## Methods


### __construct



```php
public __construct(\phpDocumentor\Transformer\Router\RouterAbstract $router): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$router` | **\phpDocumentor\Transformer\Router\RouterAbstract** |  |




***

### getTranslator

Returns an instance of the object responsible for translating content.

```php
public getTranslator(): \phpDocumentor\Translator\Translator
```











***

### setTranslator

Sets a new object capable of translating strings on this writer.

```php
public setTranslator(\phpDocumentor\Translator\Translator $translator): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\phpDocumentor\Translator\Translator** |  |




***

### transform

This method generates the AST output

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***

### buildPartials



```php
protected buildPartials(\DOMElement $parent, \phpDocumentor\Descriptor\ProjectDescriptor $project): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** |  |
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### buildFile



```php
protected buildFile(\DOMElement $parent, \phpDocumentor\Descriptor\FileDescriptor $file, \phpDocumentor\Transformer\Transformer $transformer): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** |  |
| `$file` | **\phpDocumentor\Descriptor\FileDescriptor** |  |
| `$transformer` | **\phpDocumentor\Transformer\Transformer** |  |




***

### createErrorEntry

Creates an entry in the ParseErrors collection of a file for a given error.

```php
protected createErrorEntry(\phpDocumentor\Descriptor\Validator\Error $error, \DOMElement $parse_errors): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\phpDocumentor\Descriptor\Validator\Error** |  |
| `$parse_errors` | **\DOMElement** |  |




***

### getDestinationPath

Retrieves the destination location for this artifact.

```php
protected getDestinationPath(\phpDocumentor\Transformer\Transformation $transformation): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### buildFunction

Export this function definition to the given parent DOMElement.

```php
public buildFunction(\DOMElement $parent, \phpDocumentor\Descriptor\FunctionDescriptor $function, \DOMElement $child = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$function` | **\phpDocumentor\Descriptor\FunctionDescriptor** | Element to export. |
| `$child` | **\DOMElement** | if supplied this element will be augmented instead of freshly added. |




***

### buildClass

Exports the given reflection object to the parent XML element.

```php
public buildClass(\DOMElement $parent, \phpDocumentor\Descriptor\ClassDescriptor $class, \DOMElement $child = null): void
```

This method creates a new child element on the given parent XML element
and takes the properties of the Reflection argument and sets the
elements and attributes on the child.

If a child DOMElement is provided then the properties and attributes are
set on this but the child element is not appended onto the parent. This
is the responsibility of the invoker. Essentially this means that the
$parent argument is ignored in this case.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | The parent element to augment. |
| `$class` | **\phpDocumentor\Descriptor\ClassDescriptor** | The data source. |
| `$child` | **\DOMElement** | Optional: child element to use instead of creating a<br />new one on the $parent. |




***

### finalize

Finalizes the processing and executing all post-processing actions.

```php
protected finalize(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): void
```

This method is responsible for extracting and manipulating the data that
is global to the project, such as:

- Package tree
- Namespace tree
- Marker list
- Deprecated elements listing
- Removal of objects related to visibility






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### buildPackageTree

Collects all packages and subpackages, and adds a new section in the
DOM to provide an overview.

```php
protected buildPackageTree(\DOMDocument $dom): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** | Packages are extracted and a summary inserted<br />in this object. |




***

### buildNamespaceTree

Collects all namespaces and sub-namespaces, and adds a new section in
the DOM to provide an overview.

```php
protected buildNamespaceTree(\DOMDocument $dom): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** | Namespaces are extracted and a summary inserted<br />in this object. |




***

### buildDeprecationList

Adds a node to the xml for deprecations and the count value

```php
protected buildDeprecationList(\DOMDocument $dom): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** | Markers are extracted and a summary inserted in this object. |




***

### getNodeListForTagBasedQuery

Build a tag based query string and return result

```php
protected getNodeListForTagBasedQuery(\DOMDocument $dom, string $marker): \DOMNodeList
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dom` | **\DOMDocument** | Markers are extracted and a summary inserted<br />in this object. |
| `$marker` | **string** | The marker we&#039;re searching for throughout xml |




***

### generateNamespaceTree

Generates a hierarchical array of namespaces with their singular name
from a single level list of namespaces with their full name.

```php
protected generateNamespaceTree(array $namespaces): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaces` | **array** | the list of namespaces as retrieved from the xml. |




***

### generateNamespaceElements

Recursive method to create a hierarchical set of nodes in the dom.

```php
protected generateNamespaceElements(array[] $namespaces, \DOMElement $parent_element, string $node_name = &#039;namespace&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaces` | **array[]** | the list of namespaces to process. |
| `$parent_element` | **\DOMElement** | the node to receive the children of<br />the above list. |
| `$node_name` | **string** | the name of the summary element. |




***


## Inherited methods


### checkRequirements

This method verifies whether PHP has all requirements needed to run this writer.

```php
public checkRequirements(): void
```

If one of the requirements is missing for this Writer then an exception of type RequirementMissing
should be thrown; this indicates to the calling process that this writer will not function.









***

### checkForSpacesInPath

Checks if there is a space in the path.

```php
protected checkForSpacesInPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### transform

Abstract definition of the transformation method.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
