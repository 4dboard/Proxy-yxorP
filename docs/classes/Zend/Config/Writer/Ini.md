***

# Ini





* Full name: `\Zend\Config\Writer\Ini`
* Parent class: [`\Zend\Config\Writer\AbstractWriter`](./AbstractWriter.md)



## Properties


### nestSeparator

Separator for nesting levels of configuration data identifiers.

```php
protected string $nestSeparator
```






***

### renderWithoutSections

If true the INI string is rendered in the global namespace without
sections.

```php
protected bool $renderWithoutSections
```






***

## Methods


### setNestSeparator

Set nest separator.

```php
public setNestSeparator(string $separator): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** |  |




***

### getNestSeparator

Get nest separator.

```php
public getNestSeparator(): string
```











***

### setRenderWithoutSectionsFlags

Set if rendering should occur without sections or not.

```php
public setRenderWithoutSectionsFlags(bool $withoutSections): \Zend\Config\Writer\Ini
```

If set to true, the INI file is rendered without sections completely
into the global namespace of the INI file.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withoutSections` | **bool** |  |




***

### shouldRenderWithoutSections

Return whether the writer should render without sections.

```php
public shouldRenderWithoutSections(): bool
```











***

### processConfig

processConfig(): defined by AbstractWriter.

```php
public processConfig(array $config): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### addBranch

Add a branch to an INI string recursively.

```php
protected addBranch(array $config, array $parents = array()): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |
| `$parents` | **array** |  |




***

### prepareValue

Prepare a value for INI.

```php
protected prepareValue(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### sortRootElements

Root elements that are not assigned to any section needs to be on the
top of config.

```php
protected sortRootElements(array $config): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***


## Inherited methods


### toFile

toFile(): defined by Writer interface.

```php
public toFile(string $filename, mixed $config, bool $exclusiveLock = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **mixed** |  |
| `$exclusiveLock` | **bool** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toFile() - 

***

### toString

toString(): defined by Writer interface.

```php
public toString(mixed $config): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toString() - 

***

### processConfig



```php
protected processConfig(array $config): string
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
