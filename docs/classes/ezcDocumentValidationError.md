***

# ezcDocumentValidationError

Unifies different errors into a single structure for all kinds of validation
errors. The validation error message can be fetched using the __toString()
method, while the original error is still be available, fi required.



* Full name: `\ezcDocumentValidationError`



## Properties


### error

Original error object

```php
protected mixed $error
```






***

### message

Transformed error message.

```php
protected string $message
```






***

### errorTypes

textual mapping for libxml error types.

```php
protected static array $errorTypes
```



* This property is **static**.


***

## Methods


### __construct

Create validation error object

```php
protected __construct(string $message, mixed $error = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$error` | **mixed** |  |




***

### getOriginalError

Get original error object

```php
public getOriginalError(): mixed
```











***

### __toString

Convert libXML error to string

```php
public __toString(): void
```











***

### createFromLibXmlError

Create from LibXmlError

```php
public static createFromLibXmlError(\LibXMLError $error): \ezcDocumentValidationError
```

Create a validation error object from a LibXmlError error object.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\LibXMLError** |  |




***

### createFromException

Create validation error from Exception

```php
public static createFromException(\Exception $e): \ezcDocumentValidationError
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
