***

# LegacyNamespaceFilter

Converts elements with underscores into a namespaced version.

This filter will examine the Name of an element and extract namespaces based on underscores in the
name. Every underscore is treated as a namespace separator.

* Full name: `\phpDocumentor\Plugin\LegacyNamespaceConverter\LegacyNamespaceFilter`
* Parent class: [`\Zend\Filter\AbstractFilter`](../../../Zend/Filter/AbstractFilter.md)

**See Also:**

* https://github.com/phpDocumentor/phpDocumentor2/pull/1135 - 



## Properties


### builder



```php
protected \phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder
```






***

### namespacePrefix



```php
private string $namespacePrefix
```






***

## Methods


### __construct

Initializes this filter with an instance of the builder to retrieve the latest ProjectDescriptor from.

```php
public __construct(\phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\phpDocumentor\Descriptor\ProjectDescriptorBuilder** |  |




***

### filter

Overrides the name and namespace of an element with a separated version of the class name.

```php
public filter(\phpDocumentor\Descriptor\DescriptorAbstract $value): \phpDocumentor\Descriptor\DescriptorAbstract|null
```

If a class is separated by underscores than the last part is set as name and the first parts are set as
namespace with the namespace separator instead of an underscore.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***

### namespaceFromLegacyNamespace

Extracts the namespace from the class name.

```php
private namespaceFromLegacyNamespace(string $namespace, string $className): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |
| `$className` | **string** |  |




***

### classNameFromLegacyNamespace

Extracts the class name without prefix from the full class name.

```php
private classNameFromLegacyNamespace(string $className): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### setNamespacePrefix

Set a prefix for all elements without an namespace

```php
public setNamespacePrefix(string $prefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




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
