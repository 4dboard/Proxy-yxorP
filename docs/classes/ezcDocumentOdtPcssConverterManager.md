***

# ezcDocumentOdtPcssConverterManager

Manager for ezcDocumentOdtPcssConverter instances.

An instance of this class is used to handle style converters. It uses the
{@link} interface to access style converters by the name of
the CSS style attribute they handle.

* Full name: `\ezcDocumentOdtPcssConverterManager`
* Parent class: [`ArrayObject`](./ArrayObject.md)




## Methods


### __construct

Creates a new style converter manager.

```php
public __construct(): mixed
```











***

### init

Initialize default converters.

```php
protected init(): mixed
```











***

### offsetSet

Sets a new style converter.

```php
public offsetSet(string $key, \ezcDocumentOdtPcssConverter $value): mixed
```

The key must be the CSS style property this converter handles, the
$value must be the style converter itself.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **\ezcDocumentOdtPcssConverter** |  |




***

### append

Appending elements is not allowed.

```php
public append(mixed $value): mixed
```

Appending a style is not allowed. Please use the array access with the
style name to set a new style converter.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
