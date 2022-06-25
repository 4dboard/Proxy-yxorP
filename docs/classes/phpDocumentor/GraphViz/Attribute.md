***

# Attribute

Class representing a single GraphViz attribute.



* Full name: `\phpDocumentor\GraphViz\Attribute`

**See Also:**

* http://phpdoc.org - 



## Properties


### key



```php
protected string $key
```






***

### value



```php
protected string $value
```






***

## Methods


### __construct

Creating a new attribute.

```php
public __construct(string $key, string $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Id for the new attribute. |
| `$value` | **string** | Value for this attribute, |




***

### setKey

Sets the key for this attribute.

```php
public setKey(string $key): \phpDocumentor\GraphViz\Attribute
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | The new name of this attribute. |




***

### getKey

Returns the name for this attribute.

```php
public getKey(): string
```











***

### setValue

Sets the value for this attribute.

```php
public setValue(string $value): \phpDocumentor\GraphViz\Attribute
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | The new value. |




***

### getValue

Returns the value for this attribute.

```php
public getValue(): string
```











***

### __toString

Returns the attribute definition as is requested by GraphViz.

```php
public __toString(): string
```











***

### isValueInHtml

Returns whether the value contains HTML.

```php
public isValueInHtml(): bool
```











***

### isValueContainingSpecials

Checks whether the value contains any any special characters needing escaping.

```php
public isValueContainingSpecials(): bool
```











***

### encodeSpecials

Encode special characters so the escape sequences aren't removed

```php
protected encodeSpecials(): string
```










**See Also:**

* http://www.graphviz.org/doc/info/attrs.html#k:escString - 

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
