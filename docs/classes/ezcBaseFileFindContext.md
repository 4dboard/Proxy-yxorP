***

# ezcBaseFileFindContext

Struct which defines the information collected by the file walker for locating files.



* Full name: `\ezcBaseFileFindContext`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)



## Properties


### elements

The list of files

```php
public array|(string) $elements
```






***

### count

The number of files

```php
public int $count
```






***

### size

The total file size of all files found

```php
public int $size
```






***

## Methods


### __construct

Constructs a new ezcBaseFileFindContext with initial values.

```php
public __construct(array|(string) $elements = array(), int $count, int $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array&#124;(string)** |  |
| `$count` | **int** |  |
| `$size` | **int** |  |




***

### __set_state

Returns a new instance of this class with the data specified by $array.

```php
public static __set_state(array $array): \ezcBaseFileFindContext
```

$array contains all the data members of this class in the form:
array('member_name'=>value).

__set_state makes this class exportable with var_export.
var_export() generates code, that calls this method when it
is parsed with PHP.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
