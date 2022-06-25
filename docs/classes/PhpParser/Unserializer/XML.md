***

# XML





* Full name: `\PhpParser\Unserializer\XML`
* This class implements:
[`\PhpParser\Unserializer`](../Unserializer.md)



## Properties


### reader



```php
protected $reader
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### unserialize

Unserializes a string in some format into a node tree.

```php
public unserialize(mixed $string): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** | Serialized string |


**Return Value:**

Node tree



***

### read



```php
protected read(mixed $depthLimit, mixed $throw = true, mixed& $nodeFound = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$depthLimit` | **mixed** |  |
| `$throw` | **mixed** |  |
| `$nodeFound` | **mixed** |  |




***

### readNode



```php
protected readNode(): mixed
```











***

### readScalar



```php
protected readScalar(): mixed
```











***

### parseInt



```php
private parseInt(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### readComment



```php
protected readComment(): mixed
```











***

### getClassNameFromType



```php
protected getClassNameFromType(mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
