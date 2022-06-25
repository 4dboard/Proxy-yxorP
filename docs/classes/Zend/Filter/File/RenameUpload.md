***

# RenameUpload





* Full name: `\Zend\Filter\File\RenameUpload`
* Parent class: [`\Zend\Filter\AbstractFilter`](../AbstractFilter.md)



## Properties


### options

Filter options

```php
protected array $options
```






***

### alreadyFiltered

Store already filtered values, so we can filter multiple
times the same file without being block by move_uploaded_file
internal checks

```php
protected array $alreadyFiltered
```






***

## Methods


### __construct

Constructor

```php
public __construct(array|string $targetOrOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetOrOptions` | **array&#124;string** | The target file path or an options array |




***

### setTarget



```php
public setTarget(string $target): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** | Target file path or directory |




***

### getTarget



```php
public getTarget(): string
```









**Return Value:**

Target file path or directory



***

### setUseUploadName



```php
public setUseUploadName(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | When true, this filter will use the $_FILES[&#039;name&#039;]<br />as the target filename.<br />Otherwise, it uses the default &#039;target&#039; rules. |




***

### getUseUploadName



```php
public getUseUploadName(): bool
```











***

### setUseUploadExtension



```php
public setUseUploadExtension(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | When true, this filter will use the original file<br />extension for the target filename |




***

### getUseUploadExtension



```php
public getUseUploadExtension(): bool
```











***

### setOverwrite



```php
public setOverwrite(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | Shall existing files be overwritten? |




***

### getOverwrite



```php
public getOverwrite(): bool
```











***

### setRandomize



```php
public setRandomize(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | Shall target files have a random postfix attached? |




***

### getRandomize



```php
public getRandomize(): bool
```











***

### filter

Defined by Zend\Filter\Filter

```php
public filter(string|array $value): string|array
```

Renames the file $value to the new name set before
Returns the file $value, removing all but digit characters






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** | Full path of file to change or $_FILES data array |


**Return Value:**

The new filename which has been set, or false when there were errors



***

### moveUploadedFile



```php
protected moveUploadedFile(string $sourceFile, string $targetFile): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourceFile` | **string** | Source file path |
| `$targetFile` | **string** | Target file path |




***

### checkFileExists



```php
protected checkFileExists(string $targetFile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetFile` | **string** | Target file path |




***

### getFinalTarget



```php
protected getFinalTarget(array $uploadData): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uploadData` | **array** | $_FILES array |




***

### applyRandomToFilename



```php
protected applyRandomToFilename(string $source, string $filename): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$filename` | **string** |  |




***


## Inherited methods


### hasPcreUnicodeSupport



```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### setOptions



```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```











***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isOptions



```php
protected static isOptions(mixed $options): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
