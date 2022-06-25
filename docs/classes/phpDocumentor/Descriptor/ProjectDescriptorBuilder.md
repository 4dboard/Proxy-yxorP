***

# ProjectDescriptorBuilder

Builds a Project Descriptor and underlying tree.



* Full name: `\phpDocumentor\Descriptor\ProjectDescriptorBuilder`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_PROJECT_NAME`|public|string|&#039;Untitled project&#039;|

## Properties


### assemblerFactory



```php
protected \phpDocumentor\Descriptor\Builder\AssemblerFactory $assemblerFactory
```






***

### validator



```php
protected \Symfony\Component\Validator\Validator $validator
```






***

### filter



```php
protected \phpDocumentor\Descriptor\Filter\Filter $filter
```






***

### project



```php
protected \phpDocumentor\Descriptor\ProjectDescriptor $project
```






***

### translator



```php
protected \phpDocumentor\Translator\Translator $translator
```






***

## Methods


### __construct



```php
public __construct(\phpDocumentor\Descriptor\Builder\AssemblerFactory $assemblerFactory, \phpDocumentor\Descriptor\Filter\Filter $filterManager, \Symfony\Component\Validator\Validator $validator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assemblerFactory` | **\phpDocumentor\Descriptor\Builder\AssemblerFactory** |  |
| `$filterManager` | **\phpDocumentor\Descriptor\Filter\Filter** |  |
| `$validator` | **\Symfony\Component\Validator\Validator** |  |




***

### createProjectDescriptor



```php
public createProjectDescriptor(): mixed
```











***

### setProjectDescriptor



```php
public setProjectDescriptor(\phpDocumentor\Descriptor\ProjectDescriptor $projectDescriptor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectDescriptor` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### getProjectDescriptor

Returns the project descriptor that is being built.

```php
public getProjectDescriptor(): \phpDocumentor\Descriptor\ProjectDescriptor
```











***

### isVisibilityAllowed

Verifies whether the given visibility is allowed to be included in the Descriptors.

```php
public isVisibilityAllowed(string|int $visibility): bool
```

This method is used anytime a Descriptor is added to a collection (for example, when adding a Method to a Class)
to determine whether the visibility of that element is matches what the user has specified when it ran
phpDocumentor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibility` | **string&#124;int** | One of the visibility constants of the ProjectDescriptor class or the words<br />&#039;public&#039;, &#039;protected&#039;, &#039;private&#039; or &#039;internal&#039;. |



**See Also:**

* \phpDocumentor\Descriptor\ProjectDescriptor - where the visibility is stored and that declares the constants to use.

***

### buildFileUsingSourceData



```php
public buildFileUsingSourceData(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### buildDescriptor

Takes the given data and attempts to build a Descriptor from it.

```php
public buildDescriptor(mixed $data): \phpDocumentor\Descriptor\DescriptorAbstract|\phpDocumentor\Descriptor\Collection|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### getAssembler

Attempts to find an assembler matching the given data.

```php
public getAssembler(mixed $data): \phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### filter

Analyzes a Descriptor and alters its state based on its state or even removes the descriptor.

```php
public filter(\phpDocumentor\Descriptor\Filter\Filterable $descriptor): \phpDocumentor\Descriptor\Filter\Filterable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\Filter\Filterable** |  |




***

### validate

Validates the contents of the Descriptor and outputs warnings and error if something is amiss.

```php
public validate(\phpDocumentor\Descriptor\DescriptorAbstract $descriptor): \phpDocumentor\Descriptor\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### filterAndValidateEachDescriptor

Filters each descriptor, validates them, stores the validation results and returns a collection of transmuted
objects.

```php
private filterAndValidateEachDescriptor(\phpDocumentor\Descriptor\DescriptorAbstract[] $descriptor): \phpDocumentor\Descriptor\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract[]** |  |




***

### filterAndValidateDescriptor

Filters a descriptor, validates it, stores the validation results and returns the transmuted object or null
if it is supposed to be removed.

```php
protected filterAndValidateDescriptor(\phpDocumentor\Descriptor\DescriptorAbstract $descriptor): \phpDocumentor\Descriptor\DescriptorAbstract|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### mapCodeToSeverity

Map error code to severity.

```php
protected mapCodeToSeverity(int $code): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** |  |




***

### setTranslator



```php
public setTranslator(\phpDocumentor\Translator\Translator $translator): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\phpDocumentor\Translator\Translator** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
