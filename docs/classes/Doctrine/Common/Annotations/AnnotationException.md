***

# AnnotationException

Description of AnnotationException



* Full name: `\Doctrine\Common\Annotations\AnnotationException`
* Parent class: [`Exception`](../../../Exception.md)




## Methods


### syntaxError

Creates a new AnnotationException describing a Syntax error.

```php
public static syntaxError(string $message): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Exception message |




***

### semanticalError

Creates a new AnnotationException describing a Semantical error.

```php
public static semanticalError(string $message): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Exception message |




***

### creationError

Creates a new AnnotationException describing an error which occurred during
the creation of the annotation.

```php
public static creationError(string $message): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### typeError

Creates a new AnnotationException describing a type error.

```php
public static typeError(string $message): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### semanticalErrorConstants

Creates a new AnnotationException describing a constant semantical error.

```php
public static semanticalErrorConstants(string $identifier, string $context = null): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |
| `$context` | **string** |  |




***

### attributeTypeError

Creates a new AnnotationException describing an type error of an attribute.

```php
public static attributeTypeError(string $attributeName, string $annotationName, string $context, string $expected, mixed $actual): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **string** |  |
| `$annotationName` | **string** |  |
| `$context` | **string** |  |
| `$expected` | **string** |  |
| `$actual` | **mixed** |  |




***

### requiredError

Creates a new AnnotationException describing an required error of an attribute.

```php
public static requiredError(string $attributeName, string $annotationName, string $context, string $expected): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **string** |  |
| `$annotationName` | **string** |  |
| `$context` | **string** |  |
| `$expected` | **string** |  |




***

### enumeratorError

Creates a new AnnotationException describing a invalid enummerator.

```php
public static enumeratorError(string $attributeName, string $annotationName, string $context, mixed $available, mixed $given): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributeName` | **string** |  |
| `$annotationName` | **string** |  |
| `$context` | **string** |  |
| `$available` | **mixed** |  |
| `$given` | **mixed** |  |




***

### optimizerPlusSaveComments



```php
public static optimizerPlusSaveComments(): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.







***

### optimizerPlusLoadComments



```php
public static optimizerPlusLoadComments(): \Doctrine\Common\Annotations\AnnotationException
```



* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
