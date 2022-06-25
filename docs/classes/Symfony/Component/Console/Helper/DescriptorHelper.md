***

# DescriptorHelper

This class adds helper method to describe objects in various formats.



* Full name: `\Symfony\Component\Console\Helper\DescriptorHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)



## Properties


### descriptors



```php
private \Symfony\Component\Console\Descriptor\DescriptorInterface[] $descriptors
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### describe

Describes an object if supported.

```php
public describe(\Symfony\Component\Console\Output\OutputInterface $output, object $object, array $options = array()): mixed
```

Available options are:
* format: string, the output format name
* raw_text: boolean, sets output type as raw






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$object` | **object** |  |
| `$options` | **array** |  |




***

### register

Registers a descriptor.

```php
public register(string $format, \Symfony\Component\Console\Descriptor\DescriptorInterface $descriptor): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$descriptor` | **\Symfony\Component\Console\Descriptor\DescriptorInterface** |  |




***

### getName

{@inheritdoc}

```php
public getName(): mixed
```











***


## Inherited methods


### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |




***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```









**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |


**Return Value:**

The length of the string



***

### formatTime



```php
public static formatTime(mixed $secs): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |




***

### formatMemory



```php
public static formatMemory(mixed $memory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |




***

### strlenWithoutDecoration



```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |




***

### removeDecoration



```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
