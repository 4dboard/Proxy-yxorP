***

# ezcDocumentOdtFormattingPropertyCollection

Class to carry and manage {@link ezcDocumentOdtFormattingProperties}.

An instance of this class is used in an {@link} to carry
various formatting properties of class {@link}.

* Full name: `\ezcDocumentOdtFormattingPropertyCollection`



## Properties


### properties

Formatting properties.

```php
private $properties
```






***

## Methods


### setProperties

Sets the given $properties.

```php
public setProperties(\ezcDocumentOdtFormattingProperties $properties): mixed
```

If properties of the same type are already set, an exception is thrown.
If you don't care if properties are overwriten, use {@link}. You can check if properties of a certain type are
already set using {@link} and retrieve them using {@link}.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **\ezcDocumentOdtFormattingProperties** |  |




***

### replaceProperties

Sets the given $properties, even if properties of the same type are
already set.

```php
public replaceProperties(\ezcDocumentOdtFormattingProperties $properties): mixed
```

Similar to {@link} but silently overwrites properties
of the same type, if they exist.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **\ezcDocumentOdtFormattingProperties** |  |




***

### hasProperties

Returns if properties of $type are set.

```php
public hasProperties(\const $type): bool
```

Returns true, if properties of $type are set in this collection,
otherwise false. $type must be one of the {@link} PROPERTIES_* constants.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\const** |  |




***

### getProperties

Returns properties of the given $type.

```php
public getProperties(\const $type): \ezcDocumentOdtFormattingProperties|null
```

If properties of the given $type are set, the corresponding object is
returned. Otherwise null is returned. You can check if properties of a
given $type are set using {@link}. $type must be one
of the {@link} FAMILY_
constants.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\const** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
