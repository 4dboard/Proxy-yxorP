***

# Location

The location a DocBlock occurs within a file.



* Full name: `\phpDocumentor\Reflection\DocBlock\Location`

**See Also:**

* http://phpdoc.org - 



## Properties


### lineNumber



```php
protected int $lineNumber
```






***

### columnNumber



```php
protected int $columnNumber
```






***

## Methods


### __construct



```php
public __construct(mixed $lineNumber, mixed $columnNumber): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineNumber` | **mixed** |  |
| `$columnNumber` | **mixed** |  |




***

### getLineNumber



```php
public getLineNumber(): int
```









**Return Value:**

Line where the DocBlock text starts.



***

### setLineNumber



```php
public setLineNumber(\phpDocumentor\Reflection\DocBlock\type $lineNumber): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineNumber` | **\phpDocumentor\Reflection\DocBlock\type** |  |




***

### getColumnNumber



```php
public getColumnNumber(): int
```









**Return Value:**

Column where the DocBlock text starts.



***

### setColumnNumber



```php
public setColumnNumber(int $columnNumber): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columnNumber` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
