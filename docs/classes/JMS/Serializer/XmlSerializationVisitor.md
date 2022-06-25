***

# XmlSerializationVisitor

XmlSerializationVisitor.



* Full name: `\JMS\Serializer\XmlSerializationVisitor`
* Parent class: [`\JMS\Serializer\AbstractVisitor`](./AbstractVisitor.md)



## Properties


### document



```php
public $document
```






***

### navigator



```php
private $navigator
```






***

### defaultRootName



```php
private $defaultRootName
```






***

### defaultRootNamespace



```php
private $defaultRootNamespace
```






***

### defaultVersion



```php
private $defaultVersion
```






***

### defaultEncoding



```php
private $defaultEncoding
```






***

### stack



```php
private $stack
```






***

### metadataStack



```php
private $metadataStack
```






***

### currentNode



```php
private $currentNode
```






***

### currentMetadata



```php
private $currentMetadata
```






***

### hasValue



```php
private $hasValue
```






***

### nullWasVisited



```php
private $nullWasVisited
```






***

### objectMetadataStack



```php
private $objectMetadataStack
```






***

### formatOutput



```php
private bool $formatOutput
```






***

## Methods


### __construct



```php
public __construct(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $namingStrategy, \JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |
| `$accessorStrategy` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |




***

### setDefaultRootName



```php
public setDefaultRootName(mixed $name, mixed $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$namespace` | **mixed** |  |




***

### hasDefaultRootName



```php
public hasDefaultRootName(): bool
```











***

### setDefaultVersion



```php
public setDefaultVersion(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### setDefaultEncoding



```php
public setDefaultEncoding(mixed $encoding): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **mixed** |  |




***

### setNavigator



```php
public setNavigator(\JMS\Serializer\GraphNavigator $navigator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$navigator` | **\JMS\Serializer\GraphNavigator** |  |




***

### getNavigator



```php
public getNavigator(): mixed
```











***

### visitNull



```php
public visitNull(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitString



```php
public visitString(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitSimpleString



```php
public visitSimpleString(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitBoolean



```php
public visitBoolean(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitInteger



```php
public visitInteger(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitDouble



```php
public visitDouble(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitArray



```php
public visitArray(mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### startVisitingObject



```php
public startVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### visitProperty



```php
public visitProperty(\JMS\Serializer\Metadata\PropertyMetadata $metadata, mixed $object, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |
| `$object` | **mixed** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### isInLineCollection



```php
private isInLineCollection(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### isCircularRef



```php
private isCircularRef(\JMS\Serializer\SerializationContext $context, mixed $v): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\JMS\Serializer\SerializationContext** |  |
| `$v` | **mixed** |  |




***

### isSkippableEmptyObject



```php
private isSkippableEmptyObject(mixed $node, \JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### isSkippableCollection



```php
private isSkippableCollection(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### isElementEmpty



```php
private isElementEmpty(\DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### endVisitingObject



```php
public endVisitingObject(\JMS\Serializer\Metadata\ClassMetadata $metadata, mixed $data, array $type, \JMS\Serializer\Context $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$data` | **mixed** |  |
| `$type` | **array** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### getResult



```php
public getResult(): mixed
```











***

### getCurrentNode



```php
public getCurrentNode(): mixed
```











***

### getCurrentMetadata



```php
public getCurrentMetadata(): mixed
```











***

### getDocument



```php
public getDocument(): mixed
```











***

### setCurrentMetadata



```php
public setCurrentMetadata(\JMS\Serializer\Metadata\PropertyMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\PropertyMetadata** |  |




***

### setCurrentNode



```php
public setCurrentNode(\DOMNode $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |




***

### revertCurrentNode



```php
public revertCurrentNode(): mixed
```











***

### revertCurrentMetadata



```php
public revertCurrentMetadata(): mixed
```











***

### createDocument



```php
public createDocument(mixed $version = null, mixed $encoding = null, mixed $addRoot = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |
| `$encoding` | **mixed** |  |
| `$addRoot` | **mixed** |  |




***

### prepare

Allows visitors to convert the input data to a different representation
before the actual serialization/deserialization process starts.

```php
public prepare(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### visitNumeric



```php
private visitNumeric(mixed $data, array $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$type` | **array** |  |




***

### isElementNameValid

Checks that the name is a valid XML element name.

```php
private isElementNameValid(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### attachNullNamespace



```php
private attachNullNamespace(): mixed
```











***

### addNamespaceAttributes

Adds namespace attributes to the XML root element

```php
private addNamespaceAttributes(\JMS\Serializer\Metadata\ClassMetadata $metadata, \DOMElement $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$element` | **\DOMElement** |  |




***

### createElement



```php
private createElement(mixed $tagName, mixed $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tagName` | **mixed** |  |
| `$namespace` | **mixed** |  |




***

### setAttributeOnNode



```php
private setAttributeOnNode(\DOMElement $node, mixed $name, mixed $value, mixed $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMElement** |  |
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |
| `$namespace` | **mixed** |  |




***

### getClassDefaultNamespace



```php
private getClassDefaultNamespace(\JMS\Serializer\Metadata\ClassMetadata $metadata): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |




***

### isFormatOutput



```php
public isFormatOutput(): bool
```











***

### setFormatOutput



```php
public setFormatOutput(bool $formatOutput): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatOutput` | **bool** |  |




***


## Inherited methods


### __construct



```php
public __construct(\JMS\Serializer\Naming\PropertyNamingStrategyInterface $namingStrategy, \JMS\Serializer\Accessor\AccessorStrategyInterface $accessorStrategy = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namingStrategy` | **\JMS\Serializer\Naming\PropertyNamingStrategyInterface** |  |
| `$accessorStrategy` | **\JMS\Serializer\Accessor\AccessorStrategyInterface** |  |




***

### getNamingStrategy



```php
public getNamingStrategy(): mixed
```











***

### prepare

Allows visitors to convert the input data to a different representation
before the actual serialization/deserialization process starts.

```php
public prepare(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### getElementType



```php
protected getElementType(array $typeArray): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeArray` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
