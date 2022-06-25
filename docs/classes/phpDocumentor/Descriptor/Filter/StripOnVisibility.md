***

# StripOnVisibility

Strips any Descriptor if their visibility is allowed according to the ProjectDescriptorBuilder.



* Full name: `\phpDocumentor\Descriptor\Filter\StripOnVisibility`
* Parent class: [`\Zend\Filter\AbstractFilter`](../../../Zend/Filter/AbstractFilter.md)



## Properties


### builder



```php
protected \phpDocumentor\Descriptor\ProjectDescriptorBuilder $builder
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

Filter Descriptor with based on visibility.

```php
public filter(\phpDocumentor\Descriptor\DescriptorAbstract $value): \phpDocumentor\Descriptor\DescriptorAbstract|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |




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
